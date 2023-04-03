<html>
    <head></head>
    <body>

        <?php
        echo "<H1>Datatypes:</H1>";
        $b1 = 78;
        $b2 = 5;
        $b3 = $b1 + $b2;
        $b4 = "qwe";
        // echo var_dump($b1)."<br>";
        // print($b2*5);
        // echo("<br>");
        // var_dump(print($b2 * 5));
        $b5=print($b1*$b2);
        echo("<br>");
        $b6=print($b4);
        echo("<br>");
        var_dump($b4);
        echo("<br>");
        $b7 = array("AA", "BB", "cc");
        print_r($b7);

        echo "<br><br><br><H1>String function:</H1>";
        $a1 ="Werttyu";
        echo ("String is '".$a1." '<br>");
        echo "Length: ".strlen($a1)."<br>";
        echo "Word Count :".str_word_count($a1)."<br>";
        echo "Reverse String: " . strrev($a1)."<br>";
        echo "Position: ".strpos($a1,"r")."<br>";
        //exit("function ended");
        echo "Replace: " . str_replace("t", "T", $a1,$a2)."<br>";
        echo $a2;

        echo "<br><br><br><H1>Number function:</H1>";
        echo "Integer Max: ".PHP_INT_MAX."<br>";
        $c1 = PHP_INT_MIN;
        var_dump(is_int($b7));
        echo "<br>Integer Max: ".PHP_FLOAT_MAX."<br>";
        var_dump(is_int($b7));
        echo "<br>";
        $c2 = "sa";
        var_dump (is_numeric($c2));
        echo "<br>";
        $c3 = 789.51;
        echo  intval($c3);
        
        echo "<br><br><br><H1>Constants</H1>";
        define("Cons","This is Constant",true);
        echo Cons."<br>";
        define("Arr1",["on","tw","th"],true);
        echo Arr1[2]."<br>";
        echo __LINE__."<br>";
        print_r($c3);
        

        ?>
    </body>
</html>