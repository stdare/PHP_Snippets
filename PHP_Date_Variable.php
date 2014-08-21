<?php
//create a date variable 
$date = date('g:i a l F j Y');

//to add to your external text file
if ($fp = fopen ('filename.txt', 'a+')) {
	fwrite($fp, "Save date: $date. \r\n");
	fclose($fp);
	print "Today's date: $date ";
	} 

//For more detail about date() - http://php.net/manual/en/function.date.php
?>