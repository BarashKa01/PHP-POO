<?php
namespace Barashka\Characters;

class Archer extends Character {
    public $PV = 90;
    private $arch = 1;

    public function __construct($name, $arch = null)
    {
        parent::__construct($name);
        if ($arch != null) {
            $this->arch = $arch;
        }
    }

    public function attack($target){
        if ($target != null){
            $target->PV -= $this->force;
            parent::attack($target);
        }
    }
}