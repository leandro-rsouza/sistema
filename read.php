<?php
require_once 'vendor/autoload.php';

$consult = new universe\backend\Crud();
    $consult->read();

    foreach($consult->read() as $pessoa):
        echo $pessoa['nome']."<br>".$pessoa['contato']."<br>".$pessoa['email']."<br>";
        echo "<a href='remove.php?id=".$pessoa['id']."'> Deletar Usuário </a>";
        echo "<hr>";
    endforeach;
?>