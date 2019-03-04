<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
<body>
	<h1>Asgn07 #5</h1>
<?php
	
	include ('inc-players-object.php');
	
	$player1 = new Players();
  $player2 = new Players();
	
	$player1->setPlayerName('Scott');
  $player1->setScore(1059);
  $player1->setRole("Warlock");
  $player2->setPlayerName('Sarah');
  $player2->setScore(1217);
  $player2->setRole("Mage");
	
	print("<p>Challenger 1 is ". $player1->getPlayerName() ." who plays a ". $player1->getRole()." with a score of ". $player1->getScore() ." </p>");
  print("<p>Challenger 2 is ". $player2->getPlayerName() ." who plays a ". $player2->getRole()." with a score of ". $player2->getScore() ." </p>");

?>
</body>
</html>