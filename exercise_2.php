<?php

$num = 15;

if ($num > 0){
    $degree = "positive";
} elseif ($num < 0){
    $degree = "negative";
} else {
    $degree = "zero";
}


if($num % 2 == 1){
    echo "The number is odd and $degree." ;
} else {
    echo "The number is even and $degree. " ;
}

?>

