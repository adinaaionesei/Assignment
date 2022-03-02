<?php
include('db.php');

function addGame($con, $player1, $player2, $winner, $game, $status)
{
    $query = "insert into tic_tac_toe (player_1,player_2,winner,game_structure, status) values ('$player1','$player2','$winner','$game','$status')";

    mysqli_query($con, $query);
}
