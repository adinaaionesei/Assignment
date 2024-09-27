<?php include("header.php"); ?>
<?php session_start();
$error = null;
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
}
$_SESSION = array();?>

    <body class="primary-color">
        <div class="container">
            <h2>Type your name</h2>
            <form method="post" action="game.php">
                <div class="form-group">
                    <label for="player1">Player 1:</label><br>
                    <input type="text" id="player1" class="form-control" name="player1" required><br>
                </div>
                <div class="form-group">
                    <label for="player2">Player 2:</label><br>
                    <input type="text" id="player2" class="form-control" name="player2" required><br><br>
                </div>
                <div class="message"><?php echo $error; ?></div>
                <button type="submit" class="btn">Submit</button>
                <div><a href="/assignment/finished_games.php" class="btn">Finished Games</a></div>
            </form>
        </div>
    </body>
</html>
