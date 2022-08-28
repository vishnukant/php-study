<?php

// Index Array
$cityName = array('Delhi', 'Mumbai', 'Kolkata');
print_r($cityName);
echo 'I like ' . $cityName[0] . ', ' . $cityName[1] . ' and ' . $cityName[2] ;


echo '<pre>';
// Associative Arrays
$cityName = array('Delhi', 'Mumbai', 'Kolkata');
$age = array('Ram'=>35, 'Shyam'=>37, 'Ravi'=>43);
print_r($cityName);
print_r($age);
echo 'Ram age is: '.$age['Ram'];



//Multidimensional Arrays
echo '<pre>';
$cars = array (
  array("Volvo",22,18, array(0,1,2)),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

//print_r($cars);
//var_dump($cars);


// Mixed array
$cityName = array('Delhi', 'Mumbai', 'Kolkata','k'=>'Krishna');
print_r($cityName);

?>