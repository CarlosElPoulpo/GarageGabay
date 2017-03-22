<?php
/**
 * Created by PhpStorm.
 * User: depac
 * Date: 15/03/2017
 * Time: 09:38
 */

namespace GarageBundle\Entity;


class ContactMailSHC extends ContactMail
{
    private $second_hand_car;

    /**
     * @return mixed
     */
    public function getSecondHandCar()
    {
        return $this->second_hand_car;
    }

    /**
     * @param mixed $second_hand_car
     */
    public function setSecondHandCar($second_hand_car)
    {
        $this->second_hand_car = $second_hand_car;
    }

    public function subject(){
        return $this->getFullname()." - ".$this->getSecondHandCar()->getTitle();
    }
}
