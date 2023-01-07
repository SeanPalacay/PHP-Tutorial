<!DOCTYPE html>
<html>
    <head>
        <title> Strings in PHP</title>
    </head>
    <body>
    
    
        <?php

        #String Functions

        echo strlen ("String Length"); // returns the length of the string
    
        echo "<br><br>";

        echo str_word_count("String Count");// returns the number of words in a string
    
        echo "<br><br>";

        echo strrev("i love you");//reverse a string

        echo "<br><br>";

        echo strpos ("asan ka na","ka"); //searches for a specific text within a string

        echo "<br><br>";

        echo str_replace("ikaw", "ako" , "ikaw ay pogi");//replaces some characters with some other characters in a string.
        ?>

    </body>
</html>