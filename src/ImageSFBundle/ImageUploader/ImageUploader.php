<?php
/**
 * Created by PhpStorm.
 * User: LP
 * Date: 07/02/2017
 * Time: 20:41
 */

namespace ImageSFBundle\ImageUploader;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploader
{
    private $targetDir;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->targetDir, $fileName);

        return $fileName;
    }

    public function deleteOldFile($fileName)
    {
        $oldFile = $this->targetDir().$fileName;
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }
    }
    /**
     * @return mixed
     */
    public function getTargetDir()
    {
        return $this->targetDir;
    }

}