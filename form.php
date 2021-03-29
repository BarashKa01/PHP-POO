<?php

/**
 * Class form
 * Generate quickly a regular form
 */

class Form{

    /**
     * @var array used by the form
     */
    private $data;

    /**
     * @var string surround tag of the input
     */
    public $surround = 'p';

    /**
     * @param array use data retrieved from $_POST global variable (such as last data set by the user for the example)
     */
    public function __construct($data = array())
    {
        $this->data = $data;
    }
    
    /**
     * @param $content HTML element injected to be surrounded
     * @return string
     */
    private function surround($content){
        return "<{$this->surround}>$content</$this->surround>";
    }

    /**
     * @param $index string stored from user submit ($_POST)
     * @return string
     */
    private function getValue($index){ 
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    
    /**
     * @param $name string to indicate the name of the input
     * @return string as HTML element
     */
    public function input($name){
       return $this->surround('<input type="text" name="'. $name .'" value="' .$this->getValue($name).'">');
    }

    
    public function submit(){
       return $this->surround('<button type="submit">Submit</button>');
    }
}