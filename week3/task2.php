<?php

$arr=[2,3,4,6,7,9,11,12];
$even = array_filter($arr,fn($var)=>!($var&1));
print_r($even);



?>