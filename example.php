<?php

namespace Barashka;

use \Barashka\Characters\Character;
use \Barashka\Characters\Archer;
use \Barashka\Autoloader;


require 'class\Autoloader.php';
Autoloader::register();

$merlin = new Character('Merlin');
$harry = new Character('Harry');

$legolas = new Archer('Legolas');
var_dump($harry);

$legolas->attack($harry);
$legolas->attack($harry);
var_dump($harry);