<?php
// strings functions are built in functions
$str1 = "    vanshi";
$str2 = "modi";

echo $str1 . " " .$str2;
echo "<br>";
print($str1 . " " .$str2);

echo "<br>";
echo strlen($str1);

echo "<br>";
$trimString = trim($str1); 

echo "<br>";
echo strlen($trimString);

echo "<br>";
echo strrev($str1);

echo "<br>";
echo strtolower($str1);
echo strtoupper($str1);

echo "<br>";
echo strcmp("hello", "Hello");

echo "<br>";
echo strstr($str1,"a");

echo "<br>";
echo stristr($str1,"A");

echo "<br>";
echo ucfirst("i am girl");

echo "<br>";
echo ucwords("vanshi");

echo "<br>";



?>

