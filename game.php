<?php
session_start();
$_SESSION['player1'] = $_POST['player1'];
$_SESSION['player2'] = $_POST['player2'];
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
    <div class="container">
        <h2 class="center primary-color">Tic Tac Toe</h2>
        <form class="center" method="post" action="result.php">
            <div class="row">
                <div class="col-3 red">
                    <div class="turnx">
                        <div><?php echo $_SESSION['player1']?>'s turn to move</div>
                        <div>x</div>
                    </div>
                </div>
                <table class="center col-6">
                    <tr>
                        <td class="cell" data-id="1"></td>
                        <td class="cell" data-id="2"></td>
                        <td class="cell" data-id="3"></td>
                    </tr>
                    <tr>
                        <td class="cell" data-id="4"></td>
                        <td class="cell" data-id="5"></td>
                        <td class="cell" data-id="6"></td>
                    </tr>
                    <tr>
                        <td class="cell" data-id="7"></td>
                        <td class="cell" data-id="8"></td>
                        <td class="cell" data-id="9"></td>
                    </tr>
                </table>
                <div class="col-3 green">
                    <div class="turno">
                        <div><?php echo $_SESSION['player2']?>'s turn to move</div>
                        <div>o</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="hidden" id="move-1" name="move[1]" />
                    <input type="hidden" id="move-2" name="move[2]" />
                    <input type="hidden" id="move-3" name="move[3]" />
                    <input type="hidden" id="move-4" name="move[4]" />
                    <input type="hidden" id="move-5" name="move[5]" />
                    <input type="hidden" id="move-6" name="move[6]" />
                    <input type="hidden" id="move-7" name="move[7]" />
                    <input type="hidden" id="move-8" name="move[8]" />
                    <input type="hidden" id="move-9" name="move[9]" />

                    <button type="submit" class="btn">Submit</button>
                    <div class="message"></div>
                </div>
            </div>
        </form>
    </div>
<script type="text/javascript">
    $('.cell').click(function () {
       move(this);
    });
</script>
</body>
</html>
