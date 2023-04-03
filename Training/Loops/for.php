<?php
/**
 * Print even number
 */

for($i = 1; $i <= 15; $i++)
{
    if($i%2 == 0)
    {
        echo("$i"."<br>");
    }
}

/**
 * Printing cube of numbers
 */
for($i = 1; $i <= 15; $i++)
{
    echo("Cube of ".$i." is ".$i*$i*$i."<br>");
}

/**
 * print prime numbers
 */
$i=55;
$c=0;

if($i == 1)
    echo("1 is NOT a prime number");
elseif($i == 2)
    echo(" 2 is prime number");
else
{
    for($a = 2; $a <=$i/2; $a++)
    {
        if($i%$a == 0)
        {
            $c++;
            break;
        }
    }
}
echo(($c == 0) ? (($i." is prime")):(($i." is not prime")));



?>