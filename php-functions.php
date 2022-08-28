<?php 

/*===============================
call / pass by Value
===============================*/

//1- without argument


function withoutArgument()
{
	echo 'Without argument';
}
# call this function
withoutArgument();
echo '<br/>';



//2- With Argument

function withArgument($a)
{
	echo $a;
}

# call with argument function
withArgument('hhsdhsjshdjshsj');
echo '<br/>';


//3- With argument default value

function withArgumentDefault($a='Hello Default') {
	echo $a;
}

# call with argument default
withArgumentDefault('Hello Testing');
echo '<br/>';

//4- With argument with return value

function returnValue(int $a)
{
	return $a;
}

echo returnValue(5);


/*===============================
call / pass by reference
===============================*/
echo '<br/><br/><br/>';

$a = 10;
$b = 20; 
$c =30;

$arr = array(&$a, &$b, &$c);

for ($i=0; $i<3; $i++) {
	echo '<br/>';
	$arr[$i]++;
}
echo '<br/><br/><br/>';
echo  "$a  $b  $c";
