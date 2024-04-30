<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="universe/frontend/css/multiplayer.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <title> Jogo da Velha </title>
</head>
<body>
    
    <?php
    require_once 'vendor/autoload.php';

    $set = $_GET['set'];
    if($set == 'visitante'):        
        $jogo = new \universe\backend\Jogo();
        $jogo->setNumeroJogadores(2);
        $jogo->setVisitante($_GET['visitante']);
        $jogo->setSala($_GET['id']);

        $criar_partida = new \universe\backend\Crud();
        $criar_partida->enter_game($jogo);
    elseif($set == 'mandante'):
        $jogo = new \universe\backend\Jogo();
        $jogo->setNumeroJogadores(1);
        $jogo->setMandante($_GET['id']);

        $criar_partida = new \universe\backend\Crud();
        $criar_partida->create_game($jogo);
    else:
        header('Location: room.php');
        exit();
    endif;

    ?>

<h2 id = "ip"></h2>
<h1> JOGO DA VELHA </h1>
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
    <script type="text/javascript">
      $.getJSON('https://ipapi.co/json/', function(data){
        $("#ip").text(data.ip);
      })
    </script>
</body>
</html>