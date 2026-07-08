<?php

// single dimension arrays
// index arrays
$array_one = array("one",'two');
$array_two = array("four",'five',6,7.5);

//traversing
//extract data 

foreach($array_one as $one){
    echo "$one"; 
    echo "<br>";}

echo "<pre>";
print_r($array_one);
print_r($array_two);
echo"</pre>";
#push
echo "<pre>";
print_r(array_push($array_one,"three"));
print_r($array_one);
echo "</pre>";
#pop
echo "<pre>";
print_r(array_pop($array_one));
print_r($array_one);
echo "</pre>";
#merge
echo "<pre>";
print_r(array_merge($array_one,$array_two));
echo "</pre>";
#flip
echo "<pre>";
print_r(array_flip($array_one));
echo "</pre>";
?>