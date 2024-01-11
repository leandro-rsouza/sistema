<?php
require_once 'vendor/autoload.php';
    $pessoa = new universe\backend\Pessoa();

    $pessoa->setNome($_POST['nome']);
    $pessoa->setContato($_POST['contato']);
    $pessoa->setEmail($_POST['email']);
    $pessoa->setSenha($_POST['senha']);

    $insert = new universe\backend\Crud();
    $insert->create($pessoa);

    $user = new universe\backend\Crud();
    $user->login($pessoa);

    header('Location: jogo-da-velha.php');
?>