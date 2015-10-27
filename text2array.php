<html>
<h1>Text file to array test</h1>
<h3>The script below opens a .txt file and converts the contents to an array</h3>
<?php
//Open the text file. Success recorded as the opened variable
$opened = fopen("array_test.txt", "r");

//Convert the contents of the text file to an array
$line_array = file("array_test.txt");

//Close the text file using the success variable
fclose($opened);

//print the array
print_r($line_array);
?>
