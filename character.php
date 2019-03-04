<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
<body>
	<h1>Characters</h1>
<?php
	
	include ('inc-character-object.php');
	
	$player1 = new Character();
  $player2 = new Character();
	
	$player1->setPlayerName('Jim');
  $player1->setScore(19);
  $player2->setPlayerName('Tony');
  $player2->setScore(21);
	
  $winner = max($player2->getScore(), $player1->getScore());
	print("<p>Player 1 is ". $player1->getPlayerName() ." with a score of ". $player1->getScore() ." </p>");
  print("<p>Player 2 is ". $player2->getPlayerName() ." with a score of ". $player2->getScore() ." </p>");
  
  print("<p>The winner has the highest score of $winner </p>");
?>
</body>
</html>