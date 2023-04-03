<?php
$a = 9989;
$n = $a;
$s = 0;
while($n > 0)
{
    $i = $n%10;
    $s = ($s*10)+$i;
    $n = $n/10;
    $n = (int)$n;
    
}
if($s == $a)
    echo($a." is palindrome");
else
    echo($a." is not palindrome");

?>