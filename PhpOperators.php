<!DOCTYPE html>
<html>
    <head>
        <title> Operators in PHP </title>
    </head>
    <body>
        
        <?php

        /* Arithmetic Operators */
       
        $GLOBALS['x'] = 20;
        $GLOBALS['y'] = 3;

        # additon 
        $result = $x + $y;
        
        echo "$x + $y = " . $result;

        # subtraction
        $result = $x - $y;
        
        echo "<br>";
        echo "$x - $y = " . $result;

        # multiplication
        $result = $x * $y;

        echo "<br>";
        echo "$x * $y = " . $result;

        # division
        $result = $x / $y;

        echo "<br>";
        echo "$x / $y = " . $result;

        # Modulos
        $result = $x % $y;

        echo "<br>";
        echo "$x % $y = " . $result;

        # exponentiaton
        $result = $x ** $y;

        echo "<br>";
        echo "$x ** $y = " . $result;

        ?>


        <?php

        /* Assignment Operators */

        $x = $y; //left operand gets set to the value of the expression on the right
        
        echo "<br><br>";
        echo $x . " is equals to " . $y;


        $x += $y; //same as "x = x + y"

        echo "<br><br>";
        echo $x;

        $x -= $y; //same as "x = x - y"

        echo "<br><br>";
        echo $x;
        
        $x *= $y; //same as "x = x * y"

        echo "<br><br>";
        echo $x;

        $x /= $y; //same as "x = x / y"

        echo "<br><br>";
        echo $x;

        $x %= $y; //same as "x = x % y"

        echo "<br><br>";
        echo $x;

        ?>


        <?php

        /* Comparison Operators */

        
        
        echo "<br><br>";

        # equal
        var_dump ($x == $y); //Returns true if $x is equal to $y
        
        echo "<br><br>";

        # identical
        var_dump ($x === $y); // Returns true if $x is equal to $y, and they are of the same type

        echo "<br><br>";

        # not equal
        var_dump ($x != $y); //Returns true if $x is not equal to $y
        
        echo "<br><br>";

        # not equal
        var_dump ($x <> $y); // Returns true if $x is not equal to $y	
        
        echo "<br><br>";

        # not identical
        var_dump ($x !== $y); // Returns true if $x is not equal to $y, or they are not of the same type
        
        echo "<br><br>";

        # greater than
        var_dump ($x > $y); // Returns true if $x is greater than $y
        
        echo "<br><br>";

        # less than
        var_dump ($x < $y); // Returns true if $x is less than $y
        
        echo "<br><br>";

        # greater than or equal
        var_dump ($x >= $y); // Returns true if $x is greater than or equal to $y
        
        echo "<br><br>";

        # less than or equal
        var_dump ($x <= $y); //Returns true if $x is less than or equal to $y
        
        echo "<br><br>";

        # spaceship
        var_dump ($x <=> $y);  // Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y 

        ?>


        <?php

        /* increment/decrement operators */
        
        echo "<br><br>";

        # Pre-increment
        
        $z = 5;

        echo "from " . $z;
        echo " to " . ++$z; //Increments $z by one first, then returns $z
        echo " final value is " . $z;

        echo "<br><br>";

        

        # Post-increment

        $z = 5;

        echo "from " . $z;
        echo " to " . $z++; //Returns $z, then after that increments $z by one
        echo " final value is " . $z;

        echo "<br><br>";

        # Pre-decrement

        $z = 5;

        echo "from " . $z;
        echo " to " .--$z; //Decrements $z by one first, then returns $z
        echo " final value is " . $z;

        echo "<br><br>";

        # Post-decrement

        $z = 5;

        echo "from " . $z;
        echo " to " . $z--; //Returns $z, then after that decrements $z by one
        echo " final value is " . $z;

        ?>

        <?php

        /* logical operators */
        
        echo "<br><br>";

         # And
        var_dump($x and $y); //True if both $x and $y are true

        echo "<br><br>";

        # or
        var_dump($x or $y); //True if either $x or $y is true
       
        echo "<br><br>";

        # xor
        var_dump($x xor $y); //True if either $x or $y is true, but not both

        echo "<br><br>";

        # and
        var_dump ($x && $y); //True if both $x and $y are true

        echo "<br><br>";

        # or
        var_dump($x || $y); //True if either $x or $y is true

        echo "<br><br>";

        # not
        var_dump(!$x); //True if $x is not true

        ?>

        <?php 

        /* String Operators */

        # Concatenation

        $string1 = "Hello!";
        $string2 = "World!";

        echo "<br><br>";

        echo $string2 . $string1; //Concatenation of $string2 and $string1

        # Concatenation assignment

        $string1 .= $string2; // appends $string1 and $string2

        echo "<br><br>";
        echo $string1;

        ?>

        <?php

        /* Array Operators */


        $x1 = ["hi","hello"];
        $x2 = ["bye","guys","okay"];

        echo "<br><br>";

        # Union
       
        $union = $x1 + $x2; //Union of $x and $y
        var_dump ($union); //the elements from the left-hand array will be used, and the matching elements from the right-hand array will be ignored.

        echo "<br><br>";

        #Equality

        $equality = $x1 == $x2;
        var_dump ($equality); //Returns true if $x and $y have the same key/value pairs
        
        echo "<br><br>";

        #Identity

        $identity = $x1 === $x2;
        var_dump ($identity); //Returns true if $x and $y have the same key/value pairs
        
        echo "<br><br>";

        #Inequality

        $Inequality1 = $x1 != $x2;
        $Inequality2 = $x1 <> $x2;
        var_dump ($Inequality1 , $Inequality2); //Returns true if $x and $y have the same key/value pairs
        
        echo "<br><br>";

        # Non-identity

        $NonIdentity = $x1 !== $x2;
        var_dump ($NonIdentity); //Returns true if $x and $y have the same key/value pairs

        ?>

        <?php

        /* Conditional Assignment Operators */

        echo "<br><br>";

        # Ternary

        $a = 3;
        $b = 2;


        $x = $a == $b ? "true" : "false";   //	Returns the value of $x.
                                            // The value of $x is "true"  if $a == $b = TRUE.
                                            // The value of $x is "false" if $a == $b = FALSE
        echo $x;

        echo "<br><br>";

        # Null coalescing 
        
        $given= null;
        $valid = 1;

        $x = $given ?? $valid; // Returns the value of $x.
                              // The value of $x is $given if $given exists, and is not NULL.
                              // If $given does not exist, or is NULL, the value of $x is $valid.
        echo $x;
        ?>


    </body>
</html>