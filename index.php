<?php session_reset(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Description">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Index Page Form</title>
    </head>
    <body>
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>
