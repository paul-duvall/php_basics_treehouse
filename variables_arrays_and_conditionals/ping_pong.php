<?php

// A game to practice using a while loop in which one of two players must reach a score of 11 (that player must be a minimum of 2 points higher than their opponent).

// Declare variables for each players score and the round number
$player1 = 0;
$player2 = 5;
$round = 0;

while (abs($player1 - $player2)<2 || ($player1 < 11 && $player2 < 11)){
  // Continues while there is NO WINNER
  //randomly increment on of player scores each round
  $round++;
  // Add heading to page for each round
  echo "<h2>Round $round</h2>\n";
  // Uses rand() to generate a random number between 0 and 1
  // These values are used to represent true or false in the conditional
  // I.e. if 0 is generated, the conditional is false, and if 1 is generated, the condition is true
  if(rand(0,1)) {
    $player1++; // If true, player 1 gets a point
  } else {
    $player2++; // If false, player 2 gets a point
  }
  // Print out the scores for each round
  echo "Player 1 = $player1<br />\n";
  echo "Player 2 = $player2<br />\n";
}
echo "<h1>";
if($player1 > $player2){
  echo "Player 1";
} else {
  echo "Player 2";
}
echo " is the winner after $round rounds!</h1>\n";
  
?>