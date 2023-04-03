<!DOCTYPE html>
<html>
    <head>
        <?php
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
            echo "<br>";
            switch ($x4)
            {
                case 1:
                    echo "value is 1";
                case 2:
            }
            $x1=33;
            switch ($x1)
            {
                case ($x1>60):
                    echo "A";
                    break;
                case ($x1>40&&$x1<60):
                    echo "B";
                    break;
                case ($x1>35):
                    echo "C";
                    break;
                default:
                    echo("Fail");
            }
            echo("<br>");
            $d=date("l");
            switch($d)
            {
                case "Monday":
                    echo("Day is Monday");
                    break;
                case "Tuesday":
                    echo("Day is Tues");
                    break;
                case "Wednesday":
                    echo("Day is Wednesday");
                    break;
                case "Thursday":
                    echo("Day is Thursday");
                    break;
                case "Friday":
                    echo("Day is Friday");
                    break;
                case "Saturday":
                    echo("Day is Saturday");
                    break;

                default:
                    echo("Write date between 15/02 and 17/02");
            }
            echo("<Br>".date("s"));
            // $s=strtotime("Saturday");
            // echo("<br>".date("Y-m-d",$s));
        ?>
    </head>
    <body>
        <br>
        <input type="date">
    </body>
</html>
