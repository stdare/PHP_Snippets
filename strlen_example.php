<?php
Print "<h2>Checking to see how STRLEN works</h2>";
$postcode=3198;
$okay = TRUE;

//Check number of digits in postcode string
if (strlen("$postcode") != 4) {
	print 'Your postcode does not have the right number of digits';
	$okay=FALSE;
	}

//Print success message	
if($okay) {
	print "Well done.  Your postcode, <i>$postcode</i>, is a valid entry.";
	}
	
?>
