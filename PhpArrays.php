<!DOCTYPE html>
    <html>
        <head>
            <title>Arrays in PHP</title>
        </head>
        <body>
            <?php

                /* arrays */

                $food = array ("chicken", "hotdog", "adobo"); //stores multiple values in one single variable
                
                $n = count($food); //used to return the length (the number of elements) of an array:

                for ($i = 0; $i < $n; $i++){ //loop through and print all the values of an indexed array, you could use a for loop

                    echo "i love " . $food[$i] . "<br>";
                }

            ?>

            <?php

            /*Associative array*/

            echo "<br><br>";

            $color = array("sean"=>"red", "jet"=>"blue", "cole"=>"pink"); //Associative arrays are arrays that use named keys that you assign to them.

            foreach($color as $name => $fav) //loop through and print all the values of an associative array, you could use a foreach loop
            {
                echo "I am " . $name . " my favorite color is " . $fav;
                echo "<br>";
            }

            ?>
            
            <?php

            /* multi-dimensional array */
            echo "<br>";

            $table = array(    //A two-dimensional array is an array of arrays 
                array("Sean","20", "student"),
                array("rovic","23", "student"),
                array("nicole","21", "player")
            );

            for ($i = 0; $i < count($table); $i++) { // put a for loop inside another for loop to get the elements of the array 

                    echo "<ul><br>";
                for ($j = 0; $j < count($table); $j++) {
                  echo "<li>" . $table[$i][$j] ."</li>";
                  echo "<br>";
                }
                echo "</ul><br>";
          
              }
            ?>  

            <?php

            /* Sorting arrays */

            $alphabet1 = array ("z", "a", "m");

            
            echo "<br>";
        
            sort($alphabet1);
            var_dump($alphabet1);
           

            echo "<br>";

            #descending

            rsort($alphabet1);
            var_dump($alphabet1);
            

            #ascending according to value
            
            $alphabet2 = array ("z" => "0", "a"=>"3" , "m" =>"2");

            echo "<br>";
            
            asort($alphabet2);
            var_dump($alphabet2);

             #ascending according to key

             echo "<br>";
             
             ksort($alphabet2);
             var_dump($alphabet2);

            
            ?>


        </body>
    </html>