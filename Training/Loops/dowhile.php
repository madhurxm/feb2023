<?php 
$a = 6;
$c = 0;
do {
    $c += 1;
    echo("entered loop for ".$c."th time.<br>");
    echo($a."<br>");
    $a += 10;
    
    
} while($a < 6);

echo("loop executed ".$c." times.");

?>