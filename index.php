<?php 
// PHP program to Remove
// Special Character From String

// Function to remove the special
function RemoveSpecialChar($str) {

// Using str_replace() function
// to replace the word
$res = str_replace( array( '\'', '"',
',' , ';', '<', '>', '+','-', 'E' ), '', $str);

// Returning the result
return $res;
}

// call the function
$str = "This function help to remove any special character like #&^%$$*!@ from this title";
echo RemoveSpecialChar($str);
