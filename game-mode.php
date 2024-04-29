<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="universe/frontend/css/game-mode.css">
    <title> Jogo da Velha </title>
</head>

<?php
session_start();
    require_once('verify_login.php')
?>

<body>
    <section>
        <div class='box'>
            <div class='mode'>
                <h2> MODO DE JOGO </h2>

                <div class='game'> 
                    <div class='multi'> <a href="room.php"> Multiplayer </a> <br> </div>
                    <div class='local'> <a href="game.php"> Local </a> </div>
                </div>

            </div>
        </div>
    </section>
</body>
</html>