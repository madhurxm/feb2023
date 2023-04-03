<html>
    <head></head>
    <body>
        <?php

        //IF STATEMENT
        echo("IF STATEMENT<br>");
        $x1 = 5;
        if ($x1 > 0)
        {
            echo "x is positive";
        }

        //IF ELSE STATEMENT
        echo("<br>IF ELSE STATEMENT<br>");
        $x2 = 5;
        if ($x2 > 0)
        {
            echo "x is positive";
        } 
        else
        {
            echo "x is not positive";
        }

        //IF ELSEIF ELSE STATEMENT
        echo("<br>IF ELSEIF ELSE STATEMENT<br>");
        $x3 = 5;
        if ($x3 > 0)
        {
            echo "x is positive";
        } 
        elseif ($x3 < 0) 
        {
            echo "x3 is negative";
        } 
        else 
        {
            echo "x3 is zero";
        }

        //SWITCH STATEMENT
        echo("<br>SWITCH STATEMENT<br>");
        $x4 = 2;
        switch ($x4) {
        case 1:
            echo "x is 1";
            break;
        case 2:
            echo "x is 2";
            break;
        case 3:
            echo "x is 3";
            break;
        default:
            echo "x is not 1, 2, or 3";
        }

        ?>
    </body>
</html>