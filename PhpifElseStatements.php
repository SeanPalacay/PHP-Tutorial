<!DOCTYPE html>
<html>
    <head>
        <title> If else....else if statements in PHP</title>
    </head>
    <body>
        
    <?php

    /* if statement */

    $x = "hi";

    if ($x == "hi")
    {
        echo "hello!";
    }

    ?>

    <?php

    /* if else statement */

    echo "<br><br>";

    $x = "hi";

    if ($x == "hello")
    {
        echo "hello!";
    } else {
        echo "bye!";
    }

    ?>
    
    <?php

    /* if elseif else statement */

    echo "<br><br>";

    $x = "bye";

    if ($x == "hi")
    {
        echo "hello!";
    } else if ($x == "hello"){
        echo "bye";
    } else {
        echo "okay";
    } 

    ?>


    </body>
</html>