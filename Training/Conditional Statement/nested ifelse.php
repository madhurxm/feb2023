<?php
$a=4; $b=-3;
if ($a > 0) {
    if ($b > 0) {
      echo "Both a and b are positive.";
    } else {
      echo "a is positive but b is not.";
    }
} else {
    if ($b > 0) {
      echo "b is positive but a is not.";
    } else {
      echo "Both a and b are not positive.";
    }
}  
?>