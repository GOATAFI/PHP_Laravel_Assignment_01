<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1 >= $num2 && $num1 >= $num3){
    echo "$num1 is the largest among the three numbers";
}
elseif ($num2 >= $num1 && $num2 >= $num3){
    echo "$num2 is the largest among the three numbers";
}
else{
    echo "$num3 is the largest among the three numbers";
}
