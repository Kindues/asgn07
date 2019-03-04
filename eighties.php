<!DOCTYPE html>
<!--	Author: Tom Hilbert
		Date:	3-3-19
		File:	eighties.php
		Purpose: Chapter 15 Exercise
		
		
-->

<html>
<head>
	<title>John Hughes Magic Show</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
<body>
<?php
	include("inc-80s-actor-object.php");
	echo 'made to top of 80';
	//$actor = $_POST["BratPack"];
	
	$actor = new bratpack();
	
	$actor->randomName();
	
	print ("<p>Your eighties throwback actor bomb is ".$actor->randomName()." </p>");
	
?>
</body>
</html>


