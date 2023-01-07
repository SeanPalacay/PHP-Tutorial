<!DOCTYPE html>
<html>
    <head>
        <title>Math in PHP</title>
    </head>
    <body>

        <?php

        #Pi function

        echo pi(); // returns 3.1415926535898

        ?>

        <?php

        #Min and Max function

        echo "<br><br>";
        echo (min(0,1,2,4,56,6)); // returns lowest value

        echo "<br><br>";
        echo (max(0,1,2,4,56,6)); // returns highest value

        ?>

        <?php

        # Abs Function

        echo "<br><br>";
        echo (abs(-23));// returns a positive value

        ?>

        <?php

        # Square root Function

        echo "<br><br>";
        echo (sqrt(23)); //returns the square root of a number

        ?>

        <?php

        # round up function

        echo "<br><br>";
        echo (round(22.6));// rounds a floating number to nearest integer

        ?>

        <?php

        # generate random numbers function

        echo "<br><br>";
        echo (rand()); 
        echo (rand(1,23)); //generates a random number from 1 to 23;
        ?>


    </body>
</html>