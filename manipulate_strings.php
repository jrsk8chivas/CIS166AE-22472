<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Manipulate Strings</title>
</head>

<body>
<?php // Script 1.0 - passhash.php

$fullName = "Jose Herrera Medina";
$sentence = "The Quick Brown Fox Jumps Over The Lazy Dog";
$token = strtok($sentence, " ");

echo str_word_count($sentence); //Count the number of words in the sentence
echo "<br> <br>";

while ($token !== false)
{
echo "$token<br>";
$token = strtok(" ");
}

echo "<br>";

echo strlen($fullName);

?>
</body>