<?php

// phpinfo();
// broken

echo "<h1>Hello World</h1>";
echo "Goodbye world";

$a = 5; // $ means variables. Equal is assignment operator.

// String Interpolation
echo "<div>I have $ things</div>"; // Double quotes get variables.
echo '<div>I have $ things</div>';

// Value Types

// Number
// Integer
$b = 15;
// Float
$b = 0.576;

$b = 10;


// String
$name = "Yerdude";
$name = 'Hanseung';

// Boolean is True or False
$isOn = True;

// function, class, object



// Math


// Order of Operation
// PEMDAS is Paranthesis, Exponents, Multiplication, Division, Addition and Substraction. (The order of opeation)
echo 5 + 2 * 3;

// Concatenation
echo "<div>$b + $a = "  .  ($b+$a)  .  "</div>";



?>

<hr>
<div>This is my name,
	<?php

	$firstname = "Hanseung";
	$lastname = "Lee";
	$fullname = "$firstname $lastname";

	echo $fullname;

	?>
	. What's yours?
</div>

<hr>

<?php

// Superglobal
echo "Name is: ".$_GET['name'];
echo "<div><a href='?name=Bob'>Bob</a></div>";
echo "<div><a href='?name=Grace'>Grace</a></div>";

echo "<div><a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=textarea'>Textarea</a></div>";
echo "Name is: <{$_GET['type']}>{$_GET['name']}</{$_GET['type']}>";


?>

<hr>

<?php

// Arrays
$colors = array("red","green","blue");
$colors = ["red","green","blue"];

echo $colors[2];

echo "
   <br>$colors[0]
   <br>$colors[1]
   <br>$colors[2]
";

echo count($colors);

?>

<div style="color:<?= $colors[1] ?>">
   This text is green
</div>


<hr>

<?php 

// Associative Array
$colorsAssoc = [
   "red" => "#f00",
   "green" => "#0f0",
   "blue" => "#00f"
];

echo $colorsAssoc['red'];

?>


<hr>

<?php

// Casting
$c = "$a";
$d = $c*1;

$colorsObject = (object)$colorsAssoc;

// echo $colorsObject;


echo "<hr>";

// Array Index Notation
echo $colors[0]."<br>";
echo $colorsAssoc['red']."<br>";
echo $colorsAssoc[$colors[0]]."<br>";

// Object Property Notation
echo $colorsObject->red."<br>";
echo $colorsObject->{$colors[0]}."<br>";

?>

<hr>

<?php

var_dump($colors);
echo "<hr>";
var_dump($colorsAssoc);
echo "<pre>",var_dump($colorsObject),"</pre>";


// CUSTOM FUNCTIONS
function pretty_dump($data) {
   echo "<pre>",var_dump($data),"</pre>";
}

pretty_dump($colors);

?>