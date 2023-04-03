<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        echo("<b>Arithmetic Operators</b><br>");
        $a1=3;
        $b1=2;
        echo("a= ".($a1)." b= ".($b1).("<br>"));
        echo("Addition = ".($a1+$b1).("<br>"));
        echo("Subtraction = ".($a1-$b1).("<br>"));
        echo("Multiplication = ".($a1*$b1).("<br>"));
        echo("Division = ".($a1/$b1).("<br>"));
        echo("Modulus = ".($a1%$b1).("<br>"));
        echo("Exponentiation = ".($a1**$b1).("<br>"));

        echo("<br><b>Assignment Operators</b><br>");
        $a2=3;
        $b2=2;
        echo("a= ".($a2)." b= ".($b2).("<br>"));
        echo((" a=b then a= ").($a2=$b2).("<br>"));
        echo((" a+=b then a= ").($a2+=$b2).("<br>"));
        echo((" a-=b then a= ").($a2-=$b2).("<br>"));
        echo((" a=*b then a= ").($a2*=$b2).("<br>"));
        echo((" a/=b then a= ").($a2/=$b2).("<br>"));
        echo((" a%=b then a= ").($a2%=$b2).("<br>"));

        echo("<br><b>Comparison Operators</b><br>");
        $a3=3;
        $b3=2;
        echo("a= ".($a3)." b= ".($b3).("<br>"));
        echo("a==b   ");
        var_dump($a3==$b3);
        echo("<br>");
        echo("a===b   ");
        var_dump($a3===$b3);
        echo("<br>");
        echo("a!=b   ");
        var_dump($a3!=$b3);
        echo("<br>");
        echo("a!==b   ");
        var_dump($a3!==$b3);
        echo("<br>");
        echo("a>b   ");
        var_dump($a3>$b3);
        echo("<br>");
        echo("a < b   ");
        var_dump($a3 < $b3);
        echo("<br>");

        echo("<br><b>Increment/ Decrement Operators</b><br>");
        $a4=3;
        echo("a= ".($a4).("<br>"));
        echo("Pre-increment a=".(++$a4).("<br>"));
        echo("Now a= ".($a4).("<br>"));
        echo("Post-increment a=".($a4++).("<br>"));
        echo("Now a= ".($a4).("<br>"));
        echo("Pre-decrement a=".(--$a4).("<br>"));
        echo("Now a= ".($a4).("<br>"));
        echo("Post-decrementt a=".($a4--).("<br>"));
        echo("Now a= ".($a4).("<br>"));

        echo("<br><b>Logical Operators</b><br>");
        $a5=3;
        $b5=2;
        echo("a= ".($a5)." b= ".($b5).("<br>"));
        echo("a and b   ");
        var_dump($a5 and $b5);
        echo("<br>");
        echo("a or b   ");
        var_dump($a5 or $b5);
        echo("<br>");
        echo("a and b   ");
        var_dump($a5 xor $b5);
        echo("<br>");

        echo("<br><b>String Operators</b><br>");
        $a6="abc";
        $b6="def";
        echo("a= ".($a6)." b= ".($b6).("<br>"));
        echo("Concatenation of a and b = ".($a6.$b6)."<br>");
        echo("Concatenation assignment of a <br>");
        $a6.=$b6;
        echo(("Now a = ").($a6).(" and b= ").($b6)."<br>");

        echo("<br><b>Array Operators</b>");
        $a7 = array("a"=>"PHP","b"=>"Java");
        echo("<br>"."Array a ");
        var_dump($a7);
        $b7 = array("c"=>"C++","a"=>"PHP");
        echo("<br>"."Array b ");
        var_dump($b7);
        echo("<br>"."Union ");
        print_r($a7 + $b7);
        echo("<br>"."Equality ");
        var_dump($a7 == $b7);
        echo("<br>"."Identity ");
        var_dump($a7 === $b7);
        echo("<br>"."Inequality ");
        var_dump($a7 != $b7);
        echo("<br>"."Non-identity ");
        var_dump($a7 !== $b7);

        ?>
    </body>
</html>