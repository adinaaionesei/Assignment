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
<?php
include ("db.php");
include ("functions.php");

$finishedGames = getFinishedGame($con);
if(!empty($finishedGames))
{
    echo "<p>Finished games</p>"; ?>
    <table class="btn">
    <?php
    foreach ($finishedGames as $finishedGame)
    {
        ?>
        <tr>
            <td>Player_1: <?php echo $finishedGame['player_1']; ?></td>
            <td>Player_2: <?php echo $finishedGame['player_2']; ?></td>
            <td>Winner: <?php echo $finishedGame['winner']; ?></td>
        </tr>
        <?php
    } ?>
    </table>
<?php }else{
    echo "<p>You have no finished games</p>";
}
?>
</body>
</html>
