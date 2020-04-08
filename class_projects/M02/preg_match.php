<?php
	$url = "http://www.sdev253.net/home.html";
	preg_match_all ("/(\.)(.*)(\/)/U", $url, $pat_array);
	print $pat_array[0][0]."\n";
?>