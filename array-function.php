<?php
echo '<pre>';
//array_chunk => Split an array into chunks
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));


//array_combine=> convert key & value

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

//array_keys => Return Key only in array format
print_r(array_keys($c));


?>