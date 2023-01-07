<!DOCTYPE html>
<html>
    <head>
        <title> Super Globals - Global Variables in PHP</title>
    </head>
    <body>
        <?php

        /* $GLOBALS */
        
            function person($name)
            {

            $GLOBALS['name'] = $name;//used to access global variables from anywhere in the PHP script
            
            }

            person("sean");

            echo " Hi my name is " . $name; //$GLOBALS array, it is also accessible from outside the function!
            
            function intro($name){
                echo " hi " . $name;
            }
            intro($name);
        ?>


        <?php

        /*_$SERVER */

        //$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

        echo "<br><br>";
        echo $_SERVER['PHP_SELF'];  
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];

        ?>



       <!-- $Request -->

        <br><br>

        <form method="post">
        Number: <input type="number" name="num">
        <input type="submit">
        </form>


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $number = $_REQUEST['num']; //$_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
            if (empty($number)) {
              echo "Number is empty";
            } else {
              echo $number;
            }
          }

        ?>


            <br><br>

            <form method="post">
            Address: <input type="text" name="add">
            <input type="submit">
            </form>


            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                // collect value of input field
                $address = $_POST['add']; //_POST is a PHP super global variable which is used to collect form data
                if (empty($address)) {
                echo "address is empty";
                } else {
                echo $address;
                }
            }
            ?>


            <!-- $GET -->

        <a href="PhpSuperGlobals.php?subject=PHP SuperGlobal&web=W3schools.com">Test $GET</a> 

            <?php

            echo "Study " . $_GET['subject'] . " at " . $_GET['web']; //$_GET can also collect data sent in the URL.

            ?>
    </body>
</html>