<?php

class Character {

    protected $PV = 80;
    const PV_MAX = 100;
    protected $force = 20;
    protected $name;
    protected $isDead = false;

    public function __construct($name, $force = null, $PV = null)
    {
        if ($name != null){
            $this->name = $name;
        }

        if ($force != null){
            $this->force = $force;
        }

        if ($PV != null && $PV > 0 && $PV < self::PV_MAX){
            $this->PV = $PV;
        }
        else if($PV < 0){
            echo('Not able to set your character as a Zombie');
        }
        else if ($PV > self::PV_MAX){
            echo("Your character can't be super character, it's too easy :p");
        }
        else if ($PV = null){
            $this->PV = self::PV_MAX;
        }
    }

    public function scream() {
        echo("YAAAAAAAHAAAAA");
    }

    public function selfHealing($healPoints = null){
        if ($this->PV < self::PV_MAX && $healPoints != null){

            $this->PV += $healPoints;
        }

        if ($this->PV > self::PV_MAX || $healPoints === null){
            $this->PV = self::PV_MAX;
        }
        $this->PV = self::PV_MAX;
    }

    public function attack($target){
        if ($target != null){
            $target->PV -= $this->force;
        }

        $this->isDead();
    }

    protected function isDead()
    {
        if ($this->PV < 1) {
            $this->isDead = true;
        }
        return $this->isDead;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getPV(){
        return $this->PV;
    }

    public function getForce(){
        return $this->force;
    }

    public function getIsDead(){
        return $this->isDead;
    }



}