<?php

require 'Character.php';
require 'Archer.php';

$merlin = new Character('Merlin');
$harry = new Character('Harry');

$legolas = new Archer('Legolas');
var_dump($harry);

$legolas->attack($harry);
$legolas->attack($harry);
var_dump($harry);