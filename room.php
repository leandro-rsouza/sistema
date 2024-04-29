<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="universe/frontend/css/room.css">
    <title> Salas </title>
</head>

<?php
session_start();
    require_once('verify_login.php');
    $id_visitante = $_SESSION['id'];
    $visitante = $_SESSION['name'];
    echo 
    " 
    <body>
        <section>
            <table border='1' style='text-align: center'>
                <tr>
                    <td> Número da Sala </td>
                    <td> Mandante </td>
                    <td> Nº de Jogadores </td>
                    <td> Opção </td>
                </tr>
                <tr>
                    <td> --- </td>
                    <td> --- </td>
                    <td> --- </td>
                    <td> <a href='online-game.php?id=".$id_visitante."&visitante=".$visitante."'> Entrar </a> </td>
                </tr>
            </table>
        </section>
        
    <div class='btn-create-room'> <a href='online-game.php?id=".$_SESSION['id']."&nome=".$_SESSION['name']."'> Criar Sala </a> </div>
    </body>
    ";
?>
</html>