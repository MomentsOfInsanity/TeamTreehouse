<?php 

$player1 = 0;
$player2 = 5;
$round = 0;
var_dump(abs($player1 - $player2));
var_dump($player2 - $player1);
//WIN
//player must reach a score of 11
//player must be a minimum of 2 point higher than opponent
while (abs($player1 - $player2) < 2 || ($player1 < 11 && $player2 < 11)) {
    //NOT WINNER
    //Randomly increment on of player scores each round
    $round++;
    echo "<h2>Round $round</h2>\n";
    if (rand(0,1)) {
        $player1++;
        // echo "Player 1 scores!<br />\n";
    } else {
        $player2++;
        // echo "Player 2 scores!<br />\n";
    }
    echo "player 1: $player1<br />\n";
    echo "player 2: $player2<br />\n";
}
echo "<h1>";
if ($player1 > $player2) {
    echo "Player 1 wins!";
} else {
    echo "Player 2 wins!";
}
echo "</h1>\n";
?>