<?php
/**
 * Created by PhpStorm.
 * User: depac
 * Date: 15/03/2017
 * Time: 09:38
 */

namespace GarageBundle\Entity;


class ContactMailNC extends ContactMail
{
    private $new_car;
    private $essai;

    /**
     * @return mixed
     */
    public function getEssai()
    {
        return $this->essai;
    }

    /**
     * @param mixed $essai
     */
    public function setEssai($essai)
    {
        $this->essai = $essai;
    }

    /**
     * @return mixed
     */
    public function getNewCar()
    {
        return $this->new_car;
    }

    /**
     * @param mixed $new_car
     */
    public function setNewCar($new_car)
    {
        $this->new_car = $new_car;
    }

    public function subject(){
        $message = $this->getFullname()." - ";
        if($this->essai){
            $message .= "Demande d'essai pour : ";
        }else{
            $message .= "Demande de contact pour : ";
        }
        $message .= $this->getNewCar()->getModel();
        return  $message;
    }

}
