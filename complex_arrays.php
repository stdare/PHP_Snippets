<?php
print "<h1>This file will demonstrate how to create a multi-dimensional array</h1>";
print "<h3>In otherwords, we will embed 2 arrays <i>inside</i> another array!</h3>";

//First establish two arrays
$LOTR_characters = array ('L1'=>"Frodo", 'L2'=>"Bilbo", 'L3'=>"Gandalf", 'L4'=>"Samwise");
print "Here are some characters from Lord of the Rings</br>";
print_r($LOTR_characters);

$hobbit_characters = array ('H1'=>"Thorin", 'H2'=>"Bilbo", 'H3'=>"Gandalf", 'H4'=>"Smaug");
print "</br></br>Here are some characters from The Hobbit</br>";
print_r($hobbit_characters);

//Let's now combine these two strings into one multi-dimensional array
$tolkien_characters = array_merge($LOTR_characters, $hobbit_characters);
print "</br></br><b>When merged using array_merge(), the new array prints like this:</b></br>";
print_r($tolkien_characters);

print "</br></br>If we sort the merged array using asort() this happens:</br>";
asort($tolkien_characters);
print_r($tolkien_characters);

//And we can print with foreach()
print "<p>Here is my array displayed using the foreach() looping function.</br>";
foreach ($tolkien_characters as $label => $value){
	print "$label: $value</br>"; 
}
print "In alphabetical order, it is easy to see which values come up in both original arrays.";

//And sorted using sort()
print "</br></br>And finally, if we sort the merged array using sort() the keys are reassigned, and new ones established:</br>";
sort($tolkien_characters);
print_r($tolkien_characters);
print "</br>Although the original arrays are unaffected:</br>";
print_r($LOTR_characters);
print "</br>";
print_r($hobbit_characters);
?>