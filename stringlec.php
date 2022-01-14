<?php
$name = "Mohiuddin Tarek";

echo $name . '</br>';

// To Know Length of a String

#echo (strlen($name));

//Count Words in a String

#echo str_word_count($name);

//Reverse a String 
#echo strrev($name);

//Replace Text Within a String
//firstone is which one is replaced 
//second one is new value
//third one is root name

echo str_replace("Tarek" , "Falguny", $name);

?>