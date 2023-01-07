<!DOCTYPE html>
<html>
    <head>
        <title>Variables scope in PHP</title>
    </head>

    <body>

        <?php

        #global scope
        $a = 5;

        function TryOnly() {

            echo "i am not " . $a ." years old"; //error because global scope can only be accessed outside the function
        }

        TryOnly();

        echo "i am " . $a ." years old"; 
        ?>

        <?php

        #local scope
        
        function TryAgain(){
            $b = 3;

            echo "2 is less than " . $b;
        }

        TryAgain();

        echo $b . "is greater than 2"; //error because local scope can only be accessed inside the function

        ?>
    
        <?php

    
        #Global keyword

        $a = "Sean";
        $b = "Cute";

        Function Tryy(){
            global $a, $b; //used to access a global variable from within a function.

            $b = "$a is $b";
        }

        Tryy();

        echo $b;
    
        ?>


        <?php

        #Global Variables in array

        $a = "Sean";
       

        function arrayG(){
            
            $GLOBALS['x'] = $GLOBALS['a'] . $GLOBALS['b']; //stores all global variables in an array
        }

        arrayG();

         echo $x;

        ?>

        <?php

        #Static Keyword

        function statickey() {
            static $z = 23; // variable will still have the information it contained from the last time the function was called.
            echo $z;
            $z--;
          }
          
          statickey();
          statickey();
          statickey();
        
        ?>

    </body>
</html>