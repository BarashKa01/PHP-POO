<?php
class Autoloader {
    static function autoload($className){
    require 'class/' . $className . '.php';
    }

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}