<?php

// ***********************************************************************************
// String functions are functions that do something to a string
// ***********************************************************************************

// ***********************************************************************************
// strlen returns the length of the string
// ***********************************************************************************

$phrase = "We only hit what we aim for";

$len = strlen($phrase);

//echo $len;

// ***********************************************************************************
// substr returns part of a string
// strpos returns the position of the first occurrence of a substring in a string
// ***********************************************************************************

// First argument is string, second is the starting character, third (optional) is ending character
//echo substr($phrase, 0, 5);

//echo strpos($phrase, 'hit');
// NB This will return false is the second string is not found in the first

// We can combine our use of these two string functions as follows:

$start = strpos($phrase, 'hit');
echo substr($phrase, $start);

?>