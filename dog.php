<?php

class Dog extends Pet
{
    private $_breed;

    function getBreed()
    {
        return $this->_breed;
    }

    function setBreed($breed)
    {
        $this->_breed = $breed;
    }

    function fetch()
    {
        echo "<p>" . $this->getName() . " is fetching.</p>";
	}

	//Override the Pet's eat method
    function eat()
    {
        echo $this->getName() . " is eating dog food<br>";
    }

}