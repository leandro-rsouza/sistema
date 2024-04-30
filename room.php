<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="universe/frontend/css/room.css">
    <title> Salas </title>
</head>

<?php
    require_once 'vendor/autoload.php';
    $consultar = new universe\backend\Crud();

    foreach($consultar->read_game() as $sala):
    echo
    " 
    <body>
        <section>
            <table border='1' style='text-align: center'>
                <tr>
                    <td> Número da Sala </td>
                    <td> Nº de Jogadores </td>
                    <td> Opção </td>
                </tr>
                <tr>
                    <td> ".$sala['id_partida']." </td>
                    <td> ".$sala['num_players']." </td>
                    <td> <a href='online-game.php?set=visitante&id=".$sala['id_partida']."&visitante=".$_SESSION['id']."'> Entrar </a> </td>
                </tr>
            </table>
        </section>
        
        </body>
        ";
        endforeach;
    echo "<div class='btn-create-room'> <a href='online-game.php?set=mandante&id=".$_SESSION['id']."&nome=".$_SESSION['name']."'> Criar Sala </a> </div>";
    ?>
</html>