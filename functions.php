<?php
include('db.php');

function addGame($con, $player1, $player2, $winner, $game, $status)
{
    $query = "insert into tic_tac_toe (player_1,player_2,winner,game_structure, status) values ('$player1','$player2','$winner','$game','$status')";

    mysqli_query($con, $query);
}
function getFinishedGame ($con){
    $query = "select * from tic_tac_toe where status = 'finished'";

    $result = mysqli_query($con,$query);
    if($result) {
        $finishedGames = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    return $finishedGames;
}
function getUnfinishedGame ($con, $firstPlayer, $secondPlayer) {
    $query = "select * from tic_tac_toe where status = 'unfinished' AND player_1 = '$firstPlayer' AND player_2 = '$secondPlayer' limit 1";

    $result = mysqli_query($con,$query);
    if($result) {
        $unfinishedGame = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    return $unfinishedGame;
}

