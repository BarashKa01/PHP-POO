<?php

class BootstrapForm extends Form{
    
    
    /**
     * @param $name string to indicate the name of the input
     * @return string as HTML element
     */
    public function input($name){
        return $this->surround('<label>' .$name . '</label><input type="text" name="'. $name .'" value="' .$this->getValue($name).'">');
     }

    /**
     * @param $content HTML element injected to be surrounded
     * @return string
     */
    protected function surround($content){
        return "<div class=\"form-group\">$content</div>";
    }

    public function submit(){
        return $this->surround('<button type="submit" class=btn btn-primary>Submit</button>');
     }
}