<?php
require_once 'vendor/autoload.php';
    $pessoa = new universe\backend\Pessoa();

    $pessoa->setId($_POST['id']); // ID da coluna que vai ser alterada!
    $pessoa->setNome($_POST['nome']);
    $pessoa->setContato($_POST['contato']);
    $pessoa->setEmail($_POST['email']);
    $pessoa->setSenha($_POST['senha']);

    $update = new universe\backend\Crud();
    $update->update($pessoa);

    header('Location: jogo-da-velha.php');

?>