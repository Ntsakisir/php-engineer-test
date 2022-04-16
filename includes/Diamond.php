<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;
use FlickerLeap\Shape;

class Diamond extends Shape 
{

    public function __construct($length = 8)
    {
        $this->name = "Diamond";
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    public function draw()
    {


        for ($i = 1; $i<=$this->sideLength; $i++)
        {
            for($k=$this->sideLength; $k>$i; $k--)
            {
                echo $this->padding(4);
            }

            echo $this->pixel . $this->padding(2);

            for($j = 1; $j < 2 *($i - 1); $j++ ){
                echo $this->padding(4);
            }

            if ($i == 1){
                echo $this->padding(4);
            }
            else{
                echo $this->pixel . $this->padding(2);
            }
            $this->newLine();
        }

        for ($i =$this->sideLength - 1; $i>=1; $i--)
        { 
            for($k=$this->sideLength; $k>$i; $k--)
            {
                echo $this->padding(4);
            }

            echo $this->pixel . $this->padding(2);

            for($j = 1; $j < 2 *($i - 1); $j++ ){
                echo $this->padding(4);
            }

            if ($i == 1){
                echo $this->padding(4);
            }
            else{
                echo $this->pixel . $this->padding(2);
            }
            $this->newLine();
        }

    }
}

