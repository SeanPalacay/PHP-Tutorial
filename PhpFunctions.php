<!DOCTYPE html >  
<htm >
    <head>
        <title> Functins in PHP</title>
    </head>
    <body> 
        <?php

        /*function arguments*/

        function StoreName ($shop){ //Arguments are specified after the function name, inside the parentheses
            echo "$shop shop <br>";
        }

        StoreName("729");
        StoreName("7 11");
        StoreName("LCC");
        StoreName("Ayala");
        StoreName("Super");

        ?>

        <?php  

        /* No strict declaration */
        

        function subtract(int $x , string $y){
            echo $x - $y;
        }
        
        subtract(3, "1 days");

        ?>

        <?php 


        /* with strict declaration */
        

        function add(int $x , string $y){
            echo $x + $y;
        }
        
        add(4, "1 days");//an error will be thrown
        ?>

        <?php 

        /* Default Argument Value */
        
        echo "<br><br>";
        
        function price($value = 10){
            echo "the car is priced at $value <br>";
        }

        price (300);
        price ();
        price (250);
        ?>

        <?php

        /* returning values */

        echo "<br><br>";

        function string1($word1 , $word2){
            $a = $word1 . $word2;
            return $a; //return a value
        }

        
        echo string1("Hello", "Earth!");
        echo "<br>";
        echo string1("Happy", "Birthday!");

        ?>

        <?php

        /* returning type declarations */

        function Adding($a,$b): string { //declare a type for the function return 
            $c = $a + $b;
            return (float) $c; // we can specify a different return type, than the argument type
        }

        echo "<br><br>";
        echo Adding(3, 2.3);

        ?>
        
        <?php

        /* Passing argument as reference */

        
        function sub( &$a ){ // copy of the value is used in the function and the variable that was passed into the function cannot be changed.

            $a += 5;
        }
        
        $a = 11;
        sub($a);
        echo "<br>";
        echo $a;

        ?>


    </body>
</html>