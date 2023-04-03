<?php
$a = array
(
    "i" => array(1 => 5, 2 => 2,3),
    "ii" => array(4,5,5),
    "iii" => array(7,8,9),
);
foreach( $a as $i => $v)
{
    foreach($v as $i1 => $v1)
    {
        echo($i1." -> ".$v1."<br>");
    }
}
?>