<?php
session_start();
    if(isset($_SESSION['name'])):
        header('Location: jogo-da-velha.php');
        exit();
    endif;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="universe/frontend/css/registro.css">
    <title> Cadastro </title>
</head>
<body>
    <section>
        <div class="form-box">
            <form action="register.php" method="POST">
                <h2> REGISTRO </h2>
                <div class="inputbox">
                    <input name="nome" type="text" autocomplete="off" required>
                    <label> Nome </label> 
                </div>
                <div class="inputbox">
                    <input name="contato" type="number" required>
                    <label> Contato </label>
                </div>
                <div class="inputbox">
                    <input name="email" type="email"  autocomplete="off" required>
                    <label> Email </label>
                </div>
                <div class="inputbox">
                    <input name="senha" type="password" required>
                    <label> Senha </label>
                </div>
                <button> Registrar </button>
            </form>
        </div>
    </section>
</body>
</html>