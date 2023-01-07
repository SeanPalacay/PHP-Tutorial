<!DOCTYPE html>
<html>
    <head>
        <title> Constants in PhP </title>
    </head>
    <body>

        <?php

        #Constants

        
        define("Name", "Sean Palacay");
            //Create a constant with a case-sensitive name (default is false)
        echo "My name is " . Name;

        

        define("AGE","20"); // Create a constant with a case-insensitive name (it is no longer supported)
        define("age","20"); //so we need to define another function
        echo "<br><br>";
        echo "i am " . age . " years old";

        ?>

        <?php

        #Constant arrays

        define ("kdrama",array ("AOS", "Vincenzo","Goblin"));//create an Array constant

        echo "<br><br>";

        echo "my favorite kdrama is " . kdrama[1];

        ?>

        <?php 
        
        # constants are global

        
        Function hello() {

            echo "This is my permanent name : " . Name; //we can access the constant name globally
        }

        echo "<br><br>";
        hello();

        ?>
    </body>
</html>