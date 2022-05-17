<?php

class Pet
{
    //Instance variables
    private $_name;
    private $_color;

    //Java:  public Pet()
    //Any parameter ($color) with a default value is optional
    //Any parameter ($name) without a default is required
    function __construct($name, $color="unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo $this->_name . " is eating<br>";
    }
}