<?php
$a=0;
$b=1;
echo($a." ".$b." ");
$n=8;
for($i = 0; $i < $n-2; $i++)
{
    $c = $a + $b;
    echo($c." ");
    $a = $b;
    $b = $c;
}
// str_replace($a, $b)
/**
 * 
 */

?>