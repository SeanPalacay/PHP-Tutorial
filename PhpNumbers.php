<!DOCTYPE html>
<html>
    <head>
        <title>Numbers in PHP</title>
    </head>
    <body>
        
        <?php

        # Integers

        $int = 5;

        var_dump (is_int($int )); //Check if the type of a variable is integer
        var_dump (is_integer($int ));
        var_dump (is_long($int ));
        ?>

        <?php

        # FLoats

        $float = 5.23;

        echo "<br><br>";

        var_dump (is_float($float)); //Check if the type of a variable is float
        var_dump (is_double($float));
        ?>

        <?php

        #Infinity

        $inf = 2.3e500;

        echo "<br><br>";

        var_dump ($inf);
        var_dump (is_finite($inf)); //Check if a numeric value is finite or infinite
        var_dump (is_infinite($inf));

        ?>
        
        <?php

        # Not a Number

        $NAN = acos(8);

        echo "<br><br>";

        var_dump($NAN);
        var_dump (is_nan($NAN)); //Invalid calculation will return a NaN value
        
        ?>
        
        <?php

        # Numerical Strings

        $ns = 5;
        
        echo "<br><br>";
        var_dump($ns);
        var_dump (is_numeric($ns)); //Check if the variable is numeric

        $ns = "5";

        echo "<br><br>";
        var_dump($ns);
        var_dump (is_numeric($ns)); 

        $ns = "23.22" + 1;

        echo "<br><br>";
        var_dump($ns);
        var_dump (is_numeric($ns)); 

        $ns = "hi";

        echo "<br><br>";

        var_dump($ns);
        var_dump (is_numeric($ns));
        
        ?>

        <?php

        # Casting Strings and Floats to Integers

        $a = 23.2;
        $int_cast = (int)$a; // Cast float to int
        
        echo "<br><br>";
        var_dump ($int_cast);
        

        $a = "23.2";
       
        $int_cast = (int)$a;

        echo "<br><br>";
        var_dump ($int_cast);// // Cast string to int
        ?>

        
    </body>
</html>