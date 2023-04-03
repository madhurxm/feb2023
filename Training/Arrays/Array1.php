<?php

$c = array
(
    6 => "a", "er" => "4", 4, 6, "first", 7 => "second", "third",
    "holes"   => array("first", 5 => "second", "third")
);

$d = [1,2,5,[45,5,6]];
// print_r($d);

$mul = array
(
    [1, 2, 3],
    [4, 5, 6],
    [45, 5],
    "abc" => [8, 7 => 9, 8],
);

$keys = array_keys($mul);

for($i = 0; $i < count($mul); $i++ )
{
    foreach($mul[$keys[$i]] as $k => $v2)
    {
        echo($k.">>".$v2."   &nbsp; ");
    }
    echo("<br>");
}


?>