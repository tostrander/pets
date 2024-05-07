<?php

// 328/pets/pet.php
// Note that class name does not
// need to match file name

class Pet
{
    // Fields (underscore means private)
    private $_name;
    private $_color;

    /**
     * getColor() returns the pet's color
     * @return string
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * setColor() sets the pet's color
     * @param string $color
     */
    public function setColor($color)
    {
        $this->_color = $color;
    }

    /** Set the pet's name
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    /** Get the pet's name */
    function getName()
    {
        return $this->_name;
    }

    /** Default constructor
     */
    function __construct($name="unknown", $color="???")
    {
        $this->_name = $name;
        $this->_color = $color;

        // Java:  this.name = name;
    }

    function eat()
    {
        for ($i=0; $i<5; $i++) {
            echo "<p>$this->_name is eating</p>";
        }
    }
}