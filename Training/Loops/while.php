<?php 
$a = 6;
$c = 0;
while($a < 120)
{
    echo($a."<br>");
    $a += 10;
    $c += 1;
}
echo("loop executed ".$c." times.");
?>