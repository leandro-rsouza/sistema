<?php
require_once 'vendor/autoload.php';
    $remove = new universe\backend\Crud();

    $remove->delete($_GET['id']); // ID da coluna que vai ser deletada!
    header('Location: read.php');
?>