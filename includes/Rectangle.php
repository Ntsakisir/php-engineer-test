<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Rectangle extends Shape
{
    /**
     *
     * @param int $length
     */
    public $height = 10;

    public function __construct($length = 5) {
        $this->name = 'Rectangle';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;

    }

    /**
     * Draws the square.
     */
    public function draw()
    {
        for ($i = 0; $i < $this->sideLength; $i++)
        {
            for ($j = 0; $j < $this->height; $j++) {
                if ($i == 0
                    || $j == 0
                    || $i == $this->sideLength - 1
                    || $j == $this->height  - 1) {
                    echo $this->pixel .$this->padding(2); // TODO: Fix alignment at some point
                } else {
                    echo $this->padding(4);
                }
            }
             $this->newLine();
        }
    }
}
