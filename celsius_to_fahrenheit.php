<?php
//Formula : (°C × 9/5) + 32 = °F

$cels = 32;
$faren =( $cels * 9/5 ) + 32 ;
printf('The Fahrenheit equivalent to %.2f Celsius is %.2f Fahrenheit',$cels, $faren);