<?php

$a=array(8,7,6,5,4,3,2,1);
$b=$a;
$c=$a;
$len=count($b);

for($i = 0; $i < $len; $i++ )
{
    for($j = $i+1; $j < $len; $j++)
    {
        if($b[$j] < $b[$i])
        {
            $q=$b[$j];
            $b[$j]=$b[$i];
            $b[$i]=$q;
        }
    }
}


if($len%2 == 0)
{
    $x=$len;
}
else
{
    $x=$len-1;
}

// for($i = 0, $j = $len-1; $i < $len, $j >= $len/2; $i = $i+2, $j = $j-1)
// {
//     $c[$i]=$b[$j];

// }

$i = 0; $j = $len-1;
while(($j >= $x/2))
{
    $c[$i]=$b[$j];
    $i = $i+2; $j = $j-1;
}

$i = 1; $j = 0;
while(($i < $x) )
{
    $c[$i]=$b[$j];
    $i = $i+2; $j = $j+1;
}

// for($i = 1, $j = 0; $i < $len, $j < $len/2-1; $i = $i+2, $j = $j+1)
// {
//     $c[$i]=$b[$j];

// }
print_r($c);

?>