<!--<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

?>

<?php
function myTest1() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<?php
//example global keyword
$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
}

myTest2();
echo $y; // outputs 15
?>
-->



<?php
// example of static variables
function myTest3() {
  static $x = 0;
  echo $x;echo '<br/>';
  $x++;
}

myTest3();
myTest3();
myTest3();
?>

