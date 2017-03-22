<?php
namespace GarageBundle\Form\Type;

use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use GarageBundle\Entity\ContactMail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactMailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fullname', null, array('label'=>"Prénom et nom"))
        ->add('email', EmailType::class, array('label'=>"Adresse email"))
        ->add('phone', null, array('label'=>"Téléphone"))
        ->add('body', TextareaType::class, array('label'=>"Texte", "attr"=>array('class'=> "md-textarea")))
        ->add('recaptcha', EWZRecaptchaType::class, array('label'=>" "))
        ->add('save', SubmitType::class, array('label'=>"Envoyer un mail", "attr"=>array('class'=> "btn btn-large btn-renault-tertiary-grey btn-cent-percent-width")));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ContactMail::class,
        ));
    }
}
