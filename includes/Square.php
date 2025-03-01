<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Square extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 5)
    {
        $this->name = 'Square';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     *
     */

     //This function allwos you to change the length value depending on your needs.
    public function setPixels($length) 
    { 
        $this->sideLength = $length; 
    }

    public function displayName()
    {
        echo $this->name;
    }

    /**
     * Draws the square.
     */
    public function draw()
    {
        for ($i = 0; $i < $this->sideLength; $i++) {
            for ($j = 0; $j < $this->sideLength; $j++) {
                if ($i == 0
                    || $j == 0
                    || $i == $this->sideLength - 1
                    || $j == $this->sideLength - 1) {
                    echo $this->pixel . $this->padding(2);
                } else {
                    echo $this->padding(4);
                }
            }
             $this->newLine();
        }
    }
}
