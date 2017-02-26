<?php
/**
 * Created by PhpStorm.
 * User: LP
 * Date: 07/02/2017
 * Time: 20:45
 */

namespace ImageSFBundle\EventListener;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use ImageSFBundle\Entity\Image;
use ImageSFBundle\ImageUploader\ImageUploader;

class ImageUploadListener
{
    private $uploader;
    private $targetPath;

    public function __construct(ImageUploader $uploader)
    {
        $this->uploader = $uploader;
        $this->targetPath = $uploader->getTargetDir();
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function postRemove()
    {
        if (file_exists($this->tempFilename)) {
            // On supprime le fichier
            unlink($this->tempFilename);
        }
    }

    private function deleteFile()
    {

    }

    private function uploadFile($entity)
    {
        // upload only works for Product entities
        if (!$entity instanceof Image) {
            return;
        }

        $file = $entity->getImage();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        // Si on avait un ancien fichier (attribut tempFilename non null), on le supprime
        if (null !== $entity->getImage()) {
            $this->uploader->deleteOldFile($entity->getImage());
        }

        $fileName = $this->uploader->upload($file);
        $entity->setImage($fileName);
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Image) {
            return;
        }
        $entity = $args->getEntity();

        $fileName = $entity->getImage();

        $entity->setImage(new File($this->targetPath.'/'.$fileName));
    }
}