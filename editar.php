<?php

require_once 'vendor/autoload.php';
    $query = new universe\backend\Crud();
    $edit = $query->edit($_GET['id']);

    require_once('verify_login.php');

    foreach($edit as $pessoa):
    echo
    "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='universe/frontend/css/registro.css'>
        <title> Cadastro </title>
    </head>
    <body>
        <section>
            <div class='form-box'>
                <form action='update.php' method='POST'>
                    <h2> REGISTRO </h2>
                        <input name='id' type='hidden' value='".$pessoa['id']."' autocomplete='off' required>
                    <div class='inputbox'>
                        <input name='nome' type='text' value='".$pessoa['nome']."' autocomplete='off' required>
                        <label> Nome </label> 
                    </div>
                    <div class='inputbox'>
                        <input name='contato' type='number' value='".$pessoa['contato']."' required>
                        <label> Contato </label>
                    </div>
                    <div class='inputbox'>
                        <input name='email' type='email' value='".$pessoa['email']."' autocomplete='off' required>
                        <label> Email </label>
                    </div>
                    <div class='inputbox'>
                        <input name='senha' type='password' value='".$pessoa['senha']."' required>
                        <label> Senha </label>
                    </div>
                    <button> Registrar </button>
                </form>
            </div>
        </section>
    </body>
    </html>";
    endforeach;
?>