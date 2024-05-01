<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="universe/frontend/css/room.css">
    <title> Salas </title>
</head>

<body>
    <section>
        <?php
        require_once 'vendor/autoload.php';

        $consultar = new universe\backend\Crud();
        $sala = $consultar->read_game();

        echo
        " 
        <table border='1' style='text-align: center'>
            <tr>
                <td> Número da Sala </td>
                <td> Nº de Jogadores </td>
                <td> Opção </td>
            </tr>
        ";

        if(count($sala) == 0):
            echo "<tr> <td colspan='3'> Nenhuma Sala Disponível! </td> </tr>";
        endif;

        foreach($consultar->read_game() as $sala):
        echo 
        "
        <tr>
            <td> ".$sala['id_partida']." </td>
            <td> ".$sala['num_players']."/2 </td>"; 
            if($sala['num_players'] == 2):
                echo " <td> <span class='msg-sala'> Cheia </span> </td>";
            else:
                echo "<td> <a href='online-game.php?set=visitante&id=".$sala['id_partida']."&visitante=".$_SESSION['id']."'> Entrar </a> </td>";
            endif;
        "</tr>";
        endforeach;

        echo    
        "</table>
        
        <div class='btn-create-room'> <a href='online-game.php?set=mandante&mandante=".$_SESSION['id']."&nome=".$_SESSION['name']."'> Criar Sala </a> </div>";
        ?>
    </section>
</body>
</html>