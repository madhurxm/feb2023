<?php
$a[] = "Vicky";
$a[] = "Ashish";
$a[] = "Ashishh";
$a[] = "Piyush";
$a[] = "Surya";

if (!function_exists('str_starts_with')) {
    function str_starts_with($haystack, $needle) {
        return (string)$needle !== '' && strncmp($haystack, $needle, strlen($needle)) === 0;
    }
}

/**
 * This codeblock is for finding string according to the matching input string in order
 */

// $key = $_POST["w"];
// $key = strtolower($key);

// $return_value="";
// if($key!=""){
//     foreach($a as $v)
//     {
//         $l=strlen($key);
//         $v1 = strtolower($v);
//         if(stristr($key,substr($v1, 0, $l) ))
//         {
//             $return_value=$v1;
//         }
//     }
// }    
// echo($return_value);

/**
 * This codeblock is for finding string according to the chars 
 */

$key = $_POST["w"];
//$key = "su";
$key = strtolower($key);
$key_ar = str_split($key);
$len = strlen($key);

foreach($a as $val)
{
    $count=0;

    $val_ar = str_split(strtolower($val));
    for($i = 0; $i < $len; $i++)
    {
        if(in_array($key_ar[$i], $val_ar))
        {
            $ele_index=array_search($key_ar[$i],$val_ar);
            $val_ar[$ele_index]="?";
            $count++;
        }
    }
    if(($count == $len) && ($len>0))
    {
        echo($val."  \n");
    }
}


// foreach($a as $val1)
// {
//     $val1 = strtolower($val1);
//     if(str_starts_with($val1, $key))
//     // if(strpos($val1, $key) === 0)
//     {
//         $a1 = str_split($val1);
//         array_splice($a1, 0, $len);
//         $s1 = implode("",$a1);
//         echo($s1);
//         break;
//     }
// }