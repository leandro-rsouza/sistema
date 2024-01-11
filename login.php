<?php
require_once 'vendor/autoload.php';
    $pessoa = new universe\backend\Pessoa();

    $pessoa->setEmail($_POST['email']);
    $pessoa->setSenha($_POST['senha']);

    $login = new universe\backend\Crud();
    
    if($login->login($pessoa) == true):
        if(isset($_SESSION['name'])):
            header('Location: jogo-da-velha.php');
        else:
            header('Location: index.php');
        endif;
    else:
        $_SESSION['msg'] = "Email ou Senha Incorretos!";
        header('Location: index.php');
        exit();
    endif;
?>