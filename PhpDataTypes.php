<!DOCTYPE html>
<html>
    <head>
        <title>Data types in PHP</title>
    </head>
    <body>

        <?php

        # String

        $x = "This is a string"; //string is a sequence of characters

        echo "<br><br>";
        var_dump($x);

        ?>

        <?php

        # Integer

        $x = 23; //integer data type is a non-decimal number

        echo "<br><br>";
        var_dump ($x);

        ?>

        <?php

        # Float

        $x = 23.5; //float is a number with a decimal point or a number in exponential form.

        echo "<br><br>";
        var_dump ($x);

        ?>
        
        <?php

        # Boolean

        $x = True;  // Boolean represents two possible states: TRUE or FALSE.
        $y = False;

        echo "<br><br>";
        var_dump ($x);
        var_dump ($y);
    
        ?>

        <?php

        # Array

        $x = array ("hi" , "hello, bye" , 1 , 2); // array stores multiple values in one single variable.
        echo "<br><br>";
        var_dump($x);
        ?>


        <?php

        # Object

        class Laptop {    //A class is a template for objects

          public $brand;
          public $color;
          public $price;

          function __construct($brand,$color,$price)
          {
            $this->brand = $brand;
            $this->color = $color;
            $this->price = $price;
          }
          
        function get_info()
        {
          return "the laptop brand is " . $this->brand . " and the color is " . $this->color . " which cost : " . $this->price;
        }
      }

        $Sean = new Laptop ("ACER","RED","$10,000"); //object is an instance of a class.
        echo "<br><br>";
        echo $Sean->get_info();    


        ?>

      <?php
        
        # NUll value
        
        $a = "This is a Null value";
        $a = NULL; //NULL is a variable that has no value assigned to it.

        echo "<br><br>";
        var_dump ($a);

      ?>

    </body>
</html>