<!DOCTYPE html>
<html>
    <head>
        <title> Loops in PHP </title>
    </head>
    <body>
        <?php

        /* while loop */
        

       
        $x = 3;


         // loop executes a block of code as long as the specified condition is true

        while ( $x < 5){
            echo "x is equals to 3 ";
            $x++;
        }

        ?>

        <?php

        /* DO while loop */

        echo "<br><br>";

        $x = 1;
        
        //loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

        do {                    
            echo "bert";
            $x++;
        } while ($x < 10);

        ?>

        <?php

        /* for loop */

        echo "<br><br>";

        for ($i=1; $i<5; $i++){
            echo "ulit repeat ";
        }

        ?>

        <?php

        /* for each loop */

        echo "<br><br>";

        $sean = array ("name" => "2","age"=>"3","loc"=>"4");

        foreach($sean as $value => $id){  //used to loop through each key/value pair in an array.
            echo "$value $id <br>";
        }
        ?>

        <?php

        /* Break */

        for ($i=1; $i < 3; $i++)
        {
            echo "happy birthday! ";
            break; //used to jump out of a loop.
        } 
        echo "Tapos na";

        ?>

        <?php

        /* Continue */
        
        
        echo "<br><br>";

        $date = array ("mon","tues","wed","fri");

       foreach ($date as $day)
       {
        
        if ($day == "wed") 
        {
            continue; // skips the value , continue statement breaks one iteration
        }
            echo "$day <br>";
        
       }

        ?>

    </body>
</html>