<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <style type="text/css">
        body{line-height: 1em;}
    </style>
    <body>

        <h1>PHP Engineer Test</h1>

        <h2>Hello World</h2>

        <p>At the end of this test, you should have all the answers on this page.</p>

        <h2>Output a square</h2>

        <?php
            // implement the square class here

            //create an object from Square class
            $objct = new Square;

            //Set object length value
            $objct->setPixels (12);
           
            //call draw method
            echo $objct->draw();
        ?>

        <h2>Output a diamond</h2>

        <?php
            // output your diamond here
            // Create an object from Diamond class
            $diam = new Diamond;
            echo $diam->draw();

        ?>

        <h2>Output your rectangle</h2>

        <?php
            // output your working rectangle here
            $rect = new Rectangle;
            echo $rect->draw();

        ?>

        <h2>Output the result of the API</h2>

        <?php
            // Use the Httpful client to output the API results here.
        ?>

        <h2>Recommendations</h2>

        <p><!-- Let us know how we can improve this test here --></p>

    </body>
</html>
