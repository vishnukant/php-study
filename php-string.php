<?php
$str = 'Hello We are learning PHP ';

$nl2BrExp = ' Test1
Test2
Test3	
';


//print($str); echo '<br/>';
//echo rtrim($str); echo '<br/>';
//echo nl2br($nl2BrExp);echo '<br/>';echo $nl2BrExp;echo '<br/>';
//echo strlen($str); echo '<br/>';
//echo str_replace(' ','#',$str);echo '<br/>';

//echo substr($str,0,10);echo '<br/>';

print_r(explode(' ',$str));

?>