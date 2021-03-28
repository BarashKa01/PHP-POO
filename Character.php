<?php

class Character {

    private $PV = 80;
    private $force = 20;
    private $name;
    private $isDead = false;

    public function __construct($name, $force = null, $PV = null)
    {
        if ($name != null){
            $this->name = $name;
        }

        if ($force != null){
            $this->force = $force;
        }

        if ($PV != null && $PV > 0 && $PV < 101){
            $this->PV = $PV;
        }
        else if($PV <= 0){
            echo('Not able to set your character as a Zombie')
        }
        else if ($PV > 100){
            echo("Your character can't be super character, it's too easy :p")
        }
    }

    public function scream() {
        echo("YAAAAAAAHAAAAA");
    }

    public function selfHealing($healPoints = null){
        if ($this->PV < 100 && $healPoints != null){

            $this->PV += $healPoints;
        }

        if ($this->PV > 100 || $healPoints === null){
            $this->PV = 100;
        }
        $this->PV = 100;
    }

    public function attack($target){
        if ($target != null){
            $target->PV -= $this->force;
        }

        $this->isDead();
    }

    public function isDead()
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