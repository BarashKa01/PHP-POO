<?php

class Form{

    private $data;
    public $surround = 'p';

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    private function surround($content){
        return "<{$this->surround}>$content</$this->surround>";
    }

    private function getValue($index){ 
        //Return if found value of stored data
        //var_dump($this->data[$index]);
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input($name){
       return $this->surround('<input type="text" name="'. $name .'" value="' .$this->getValue($name).'">');
    }

    public function submit(){
       return $this->surround('<button type="submit">Submit</button>');
    }
}