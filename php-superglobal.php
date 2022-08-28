<?php
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?>


<?php
echo '<pre>';
//echo $_SERVER['PHP_SELF'];
//echo "<br>";
//echo $_SERVER['SERVER_NAME'];
//echo "<br>";
//echo $_SERVER['HTTP_HOST'];
//echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
//echo $_SERVER['HTTP_USER_AGENT'];
//echo "<br>";
//echo $_SERVER['SCRIPT_NAME'];

print_r($_SERVER);
print_r($_REQUEST);

print_r($_POST);

print_r($_GET);
?>


