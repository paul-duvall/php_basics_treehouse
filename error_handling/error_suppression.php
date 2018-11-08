<?php
// Report simple running errors
error_reporting(E_ALL);
// Make sure they're on screen
ini_set('display_errors', 1);
// HTML formatted errors
ini_set("html_errors", 1);

// This document uses error supression in a number of places using the @ symbol
// These should be used sparingly as they can confuse matters
// Looking below, the @ symbols can be removed, starting at the end, revealing a series of errors that would not be seen if the preceding @ symbols were not in place.  

// Fatal error
// This is happening as a result of calling a file that does not exist
//@require "non_existent_file";

// Warning
@include "non_existent_file";

// Warning
//$my_file = @file('non_existent_file') or die("Failed opening file");

function error_function($error) {
    echo $bad;
    // Notice
    return $error;
}

// Warning
echo @error_function();

echo "End of File.";