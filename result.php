<?php
session_start();
$moves = $_POST['move'];
$winningCombinations = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
    [1, 4, 7],
    [2, 5, 8],
    [3, 6, 9],
    [1, 5, 9],
    [3, 5, 7]
];
$player1 = [];
$player2 = [];
$winner = null;

foreach ($moves as $move => $cell) {
    if($move %2 != 0) {
        $player1[$move] = $cell;
    } else {
        $player2[$move] = $cell;
    }
    if (count($player1) >= 3) {
        foreach ($winningCombinations as $combination) {
            if (array_diff($combination, $player1) == false) {
                $winner = $_SESSION['player1'];
                break;
            }
        }
    }
    if ($winner == null) {
        if (count($player2) >= 3) {
            foreach ($winningCombinations as $combination) {
                if (array_diff($combination, $player2) == false) {
                    $winner = $_SESSION['player2'];
                    break;
                }
            }
        }
    }
}
if ($winner == null) {
    echo "Tie";
} else {
    echo $winner;
}