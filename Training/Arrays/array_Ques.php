<?php

echo("a1 array ");
$a1 = [2,5,9,7,1,4,3];
print_r($a1);
echo("<br>");
echo("<br>");
echo("b1 array ");
$b1 = array(7,8,1,9,2);
print_r($b1);
echo("<br>");
echo("<br>");

echo("a2 array ");
$a2 = array(4,9,1,9,3,6,7);
print_r($a2);
echo("<br>");
echo("<br>");
echo("b2 array ");
$b2 = array(7,3,3,4);
print_r($b2);
echo("<br>");
echo("<br>");

echo("a3 array ");
$a3 = array
(
    "B" => 2,
    "C" => 3,
    "D" => 4,
    "E" => 5,

);
print_r($a3);
echo("<br>");
echo("<br>");
echo("b3 array ");
$b3 = array
(
    1 => 6,
    2 => 8,
);
print_r($b3);
echo("<br>");
echo("<br>");

echo("a4 array ");
$a4 = ["Q", "W"];
print_r($a4);
echo("<br>");
echo("<br>");
$Q = "qq";
$W = "ww";

/** 
 * array_chunk — Split an array into chunks 
 */
echo("array_chunk"."<br>");
print_r(array_chunk($a2,3));
echo("<br>");
print_r(array_chunk($b1,2, true));
echo("<br>");
echo("<br>");

/**
 * The array_keys() returns an array containing the keys.
 */
echo("array_keys"."<br>");
print_r(array_keys($a3));
echo("<br>");
print_r(array_keys($a1,"3"));
echo("<br>");
echo("<br>");

/**
 * The array_map() helps to modify all elements of one or more arrays according to user-defined condition
 */
echo("array_map"."<br>");
function func1($n)
{
  return ($n * 5);
}
print_r(array_map("func1", $a1));
echo("<br>");

function func2($n)
{
  return ($n + 3);
}
print_r(array_map("func2", $a2));
echo("<br>");echo("<br>");

/**
 * The array_merge() function merges one or more arrays into one array.
 */
echo("array_merge"."<br>");
print_r(array_merge($b1,$b2));
echo("<br>");

print_r(array_merge($b1,$a1));
echo("<br>");echo("<br>");

/**
 * array_pad — Pad array to the specified length with a value
 */
echo("array_pad"."<br>");
print_r(array_pad($a1,-9,"PAD"));
echo("<br>");

print_r(array_pad($b2,7,8));
echo("<br>");echo("<br>");

/**
 * array_pop Delete the last element of an array
 */
echo("array_pop"."<br>");
print_r($a1);
echo("<br>");
array_pop($a1);
print_r($a1);
echo("<br>");

print_r($a2);
echo("<br>");
array_pop($a2);
print_r($a2);
echo("<br>");echo("<br>");

/**
 * array_push() inserts one or more elements to the end of an array
 */
echo("array_push"."<br>");
array_push($a1,3);
print_r($a1);
echo("<br>");

array_push($a2,3);
print_r($a2);
echo("<br>");echo("<br>");

/**
 * array_product() calculates and returns product of array.
 */
echo("array_product"."<br>");
echo(array_product($a2));
echo("<br>");

echo(array_product($b2));
echo("<br>");echo("<br>");

/**
 *  array_reverse() function returns an array in the reverse order.
 */
echo("array_reverse"."<br>");
print_r(array_reverse($b2));
echo("<br>");

print_r(array_reverse($b1));
echo("<br>");echo("<br>");

/**
 *  array_replace() function replaces the values of the first array with the values from following arrays.
 */
echo("array_replace"."<br>");
print_r(array_replace($a1,$b2));
echo("<br>");

print_r(array_replace($a1,$b3));
echo("<br>");echo("<br>");

/**
 * array_sum() function returns the sum of all the values in the array
 */
echo("array_sum"."<br>");
echo array_sum($a1);
echo("<br>");
echo array_sum($b3);
echo("<br>");echo("<br>");

/**
 * array_fill() function fills an array with values.
 */
echo("array_fill"."<br>");
$t1 = array_fill(2,3,"8");
print_r($t1);
echo("<br>");
$t2 = array_fill(10,2,"QQ");
print_r($t2);
echo("<br>");echo("<br>");

/**
 * count() function returns the number of elements in an array.
 */
echo("count"."<br>");
echo "Count of \$a2: ". count($a2);
echo("<br>");
echo "Count of \$a3: ". count($a3);
echo("<br>");echo("<br>");

/**
 * compact() function creates an array from variables and their values.
 */
echo("compact"."<br>");
print_r(compact($a4));
echo("<br>");echo("<br>");

/**
 * list() function is used to assign values to a list of variables in one operation
 */
echo("list"."<br>");
list($a,$b) = $a2;
echo ("$a $b");
echo("<br>");echo("<br>");

/**
 * range() function creates an array containing a range of elements
 */
echo("range"."<br>");
$t3 = range(1,3);
print_r($t3);
echo("<br>"); 

$t4 = range(1,10,2);
print_r($t4);
echo("<br>");echo("<br>"); 

/**
 * next() function moves the internal pointer and output the next element in the array.
 */
echo("next"."<br>");
next($a2);
echo next($a2);
echo("<br>");echo("<br>");

/**
 * array_diff() function compares the values of two (or more) arrays, and returns the differences.
 */
echo("array_diff"."<br>");
print_r(array_diff($a1,$a2));
echo("<br>");
print_r(array_diff($a3,$a2));
echo("<br>");
echo("<br>"); echo("<br>");

/**
 * end() moves the internal pointer and outputs, the last element in the array.
 */
echo("end"."<br>");
echo end($b2);
echo("<br>");
echo end($a2);
echo("<br>");
echo("<br>");

/**
 * prev() function moves the internal pointer to, and outputs, the previous element in the array.
 */
echo("prev"."<br>");
echo prev($b2);
echo("<br>");
echo prev($a2);
echo("<br>");
echo("<br>");

/**
 * reset() moves the internal pointer to the first element of the array.
 */
echo("reset"."<br>");
echo reset($b2);
echo("<br>");
echo reset($a2);
echo("<br>");
echo("<br>");

/**
 * array_column() function returns the values from a single column in the input array.
 */
echo("array_column"."<br>");
$marks = array
(
    "Ankit" => array
    (
        "P" => 95,
        "C" => 85,
        "M" => 74,
    ),
    "Ram" => array
    (
        "P" => 78,
        "C" => 98,
        "M" => 46,
    ),
    "Anoop" => array
    (
        "P" => 88,
        "C" => 46,
        "M" => 99,
    ),
);
$t5 = array_column($marks, "C");
print_r($t5);
echo("<br>");
echo("<br>");

/**
 * explode() breaks a string into an array.
 */
echo("explode"."<br>");
$t6 = "This is a string. For explode.";
print_r (explode(" ",$t6));
echo("<br>");
echo("<br>");

/**
 * implode() function returns a string from the elements of an array.
 */
echo("implode"."<br>");
$t7 = ["this", "is",  "a", "old", "implode"];
echo(implode(" ", $t7));
echo("<br>");
echo("<br>");

?>