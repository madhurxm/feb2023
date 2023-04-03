<?php

/**
 * PROGRAM FOR PATTERN
 *           *
 *           *
 *          **
 *           ***
 *       *****
 *           ********
 * 
 */ 


$a=0;
$b=1;
$arr[]=$b;
$n=6;
for($i = 0; $i < $n-1; $i++)
{
    $c = $a + $b;
    $arr[]=$c;
    $a = $b;
    $b = $c;
}
// print_r($arr);

for($i = 1; $i < $n+1; $i++)
{
    if(($n%2 != 0))
    {
        if($i%2 != 0)
        {
            
            for($k = 1; $k <= ($arr[$n-1] - $arr[$i-1]); $k++)
            {
                echo("&nbsp; ");
            }

            for($j = 0; $j < $arr[$i-1]; $j++)
            {
                echo("*");
            }
        }
        else
        {
            for($k = 1; $k <= ($arr[$n-1]); $k++)
            {
                echo("&nbsp; ");
            }

            for($j = 0; $j < $arr[$i-1]; $j++)
            {
                echo("*");
            }

        }
        

    }
    elseif(($n%2 == 0))
    {
        if($i%2 != 0)
        {
            for($k = 1; $k <= ($arr[$n-2] - $arr[$i-1]); $k++)
            {
                echo("&nbsp; ");
            }

            for($j = 0; $j < $arr[$i-1]; $j++)
            {
                echo("*");
            }
        }
        else
        {
            for($k = 1; $k <= ($arr[$n-2] - $arr[1]); $k++)
            {
                echo("&nbsp; ");
            }

            for($j = 0; $j < $arr[$i-1]; $j++)
            {
                echo("*");
            }
        }
    }


    // for($k = 1; $k < ($arr[$n-1]); $k++)
    // {
    //     echo("&nbsp ");
    // }

    // if($i%2 != 0)
    // {
    //     for($j = $arr[0]; $j < $arr[$i-1]; $j++)
    //     {

    //     }
    // }
    
    echo("<br>");
}

?>