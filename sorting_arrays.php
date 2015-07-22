<?php
print "<h1>This file will explore sorting of array values</h1>";

//set array values
$my_array = array(
	1=> "Oscar the Grouch",
	2=> "Elmo",
	3=> "Mr Snuffalupagus",
	4=> "Big Bird"
);

//print default array
print "My original array!</br>";
print_r($my_array);

//Let's sort this array
asort($my_array);
print "<p>Now my array should be in alphabetical order, based on the values (not data labels)";
print "</br>Notice how PHP keeps the original data labels when using <u>asort</u>().</p>";
print_r($my_array);

//And sort by reverse order
arsort($my_array);
print "<p>My array now sorted in reverse order</p>";
print_r($my_array);

//when using the foreach loop, what happens now that the data labels are out of order?
print "<p>Here is my array sorted in reverse order, using the foreach() looping function.</br>
I wonder what will happen....</p>";
foreach ($my_array as $label => $value){
	print "$label: $value</br>";
}

//To sort and reassign the key values use sort()
sort($my_array);
print "<p>My array now is now sorted in alpha order, and the keys reassigned.</p>";
print_r($my_array);

?>
