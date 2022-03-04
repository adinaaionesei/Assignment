<?php
session_start();
include ("db.php");
include ("functions.php");

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
$emptyCell = false;
foreach ($moves as $move => $cell) {
    if($move %2 != 0) {
        $player1[$move] = $cell;
    } else {
        $player2[$move] = $cell;
    }
    //check if empty cell is found
    if ($cell == '') {
        $emptyCell = true;
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
    if ($winner != null) {
        break;
    }
}
if($emptyCell == true && $winner == null) {
    $status = "unfinished";
} else {
    $status = "finished";
}
addGame($con, $_SESSION['player1'], $_SESSION['player2'], $winner, serialize($moves), $status);
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Description">
    <link href="css/main.css" rel="stylesheet" />
    <script src="js/game.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Game Page</title>
</head>
<body class="primary-color">
    <div class="container center">
        <?php if ($status == "unfinished") { ?>
            <p class="box">The game was unfinished</p>
        <?php } elseif ($winner == null) { ?>
            <p class="box">The game was tie</p>
        <?php } else { ?>
            <p class="box">The winner is <?php echo $winner ?></p>
        <?php } ?>
        <div><a href="/assignment/game.php" class="btn">Rematch</a></div>
        <div><a href="/assignment/index.php" class="btn">New Game</a></div>
    </div>
</body>
</html>
