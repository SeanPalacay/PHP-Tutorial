<!DOCTYPE html>
<html>
    <head>
        <title>Regular expressions in PHP</title>
    </head>

    <body>
        <?php

        /* Regular Expression Functions */

        $tula = "Ay yakapin mo ako
        Kahit hindi na totoo
        Maiintindihan naman kita
        Kung sawa ka na
        Kung sa'n ka sasaya
        'Wag kang mag-alala
        Oks lang ako";

        $find = "/ako|oks|wag/i";


        # preg_match()

        echo preg_match($find,$tula); // Returns 1 if the pattern was found in the string and 0 if not

        echo "<br>";

        # preg_match_all()

        echo preg_match_all($find,$tula); //Returns the number of times the pattern was found in the string, which may also be 0

        echo "<br>";

        # preg_replace()
        echo preg_replace($find, "ikaw", $tula); //	Returns a new string where matched patterns have been replaced with another string

        ?>

        <?php

        /*Grouping*/


             echo "<br><br>";

            $tula1 = "nakakapabagbag ang aking loob";


            $pattern = "/na(ka){2}|pag(bag){2}|loob/i";
        
            echo preg_match_all($pattern, $tula1);//sed to select parts of the pattern to be used as a match.
        ?>
    </body>
</html>