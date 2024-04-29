<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="universe/frontend/css/multiplayer.css">
    <title> Jogo da Velha </title>
</head>
<body>
    <h1> JOGO DA VELHA </h1>

    <?php
    session_start();
        require_once 'verify_login.php';
        require_once 'vendor/autoload.php';

        $pessoa = new \universe\backend\Jogo();

        $pessoa->getMandante($_GET['nome']);
        $pessoa->getVisitante($_GET['visitante']);

        $partida = new \universe\backend\Crud();

        $partida->game($_GET['nome'], $_GET['visitante']);

        echo "<h2>" .$_GET['nome']. " X " .$_GET['visitante']. "</h2>";
    ?>
<section class="game">
    <span id="j1"> </span>
    <span id="j2"> </span>

    <table>
        <tr>
            <td>
                <input type="text" id="1" class="set" onfocus="set(0)">
            </td>
            <td>
                <input type="text" id="2" class="set" onfocus="set(1)">
            </td>
            <td>    
                <input type="text" id="3" class="set" onfocus="set(2)">
            </td>
        </tr>

        <tr>
            <td>
                <input type="text" id="4" class="set" onfocus="set(3)">
            </td>
            <td>
                <input type="text" id="5" class="set" onfocus="set(4)">
            </td>
            <td>    
                <input type="text" id="6" class="set" onfocus="set(5)">
            </td>
        </tr>

        <tr>
            <td>
                <input type="text" id="7" class="set" onfocus="set(6)">
            </td>
            <td>
                <input type="text" id="8" class="set" onfocus="set(7)">
            </td>
            <td>    
                <input type="text" id="9" class="set" onfocus="set(8)">
            </td>
        </tr>
    </table>

</section>
    <script src="game.js"></script>
</body>
</html>