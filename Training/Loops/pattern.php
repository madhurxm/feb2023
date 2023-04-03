<?php
$t=54;
$n=($t/2)+1;
$n=(int)$n;
$k=$n-1;
for($i = 1; $i <= $n; $i++)
{
    for($j = 0; $j < $k; $j++)
    {
        echo("&nbsp; ");
    }
    $k--;

    for($j = 1; $j <= 2*$i-1; $j++)
    {
        echo("*");            
    }
    echo("<br>");
    
}
$k=1;
for($i = 1; $i <= $n-1; $i++)
{
    for($j = 0; $j < $k; $j++)
    {
        echo("&nbsp; ");
    }
    $k++;

    for($j = 1; $j <= 2*($n-$i)-1 ; $j++)
    {
        echo("*");            
    }
    echo("<br>");
    
}

?>
