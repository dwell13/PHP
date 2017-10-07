<html>
<head>
<title>Php Toturials </title>
</head>
<body>
<!-- numberic array -->
<?php

$movie[0] = 'Shaolin Monk';
$movie[1] = 'Drunken Master';
$movie[2] = 'American Ninja';
$movie[3] = 'Once upon a time in China';
$movie[4] = 'Replacement Killers';
echo $movie[3];
$movie[3] = "Eastern Condors";
echo $movie[3];
?>
<br>
<!-- array -->
<?php
$movie = array(0 => "Shaolin Monk",
               1 => "Drunken Master",
               2 => "American Ninja",
               3 => "Once upon a time in China",
               4 =>"Replacement Killers" );
echo $movie[4];
?> <br>
<?php
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
print_r($persons); 
echo "
"; 
echo "Mary is a " . $persons["Mary"];
?>
<br>
<?php
$movies =array(
"comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
"action" => array("Die Hard", "Expendables"),
"epic" => array("The Lord of the rings"),
"Romance" => array("Romeo and Juliet")
);
print_r($movies);
?>
<br>
<?php
$x = array('id' => 1);

$y = array('value' => 10);

$z = $x + $y;
?>
<br>
<?php
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo count($lecturers);
?>
<br>
<?php
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

ksort($persons);

print_r($persons);
?><br>
<?php

$today = "wednesday";

switch($today){

case "sunday":

echo "pray for us sinners.";

break;

case "wednesday":

echo "ladies night, take her out for dinner";

break;

case "saturday":

echo "take care as you go out tonight.";

break;

default:

echo "have a nice day at work";

break;

}

?>









</body>
</html>