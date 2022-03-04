
<body class="primary-color">
<?php
include ("db.php");
include ("functions.php");
include ("header.php");

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
