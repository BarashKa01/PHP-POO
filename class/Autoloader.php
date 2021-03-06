<?php

namespace Barashka;
class Autoloader {
    static function autoload($className){
        if (strpos($className, __NAMESPACE__) === 0) {
            $className = str_replace(__NAMESPACE__, '', $className);
            require 'class/' . $className . '.php';
        }
    }

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}