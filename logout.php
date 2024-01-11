<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['id']);
    header('Location: jogo-da-velha.php');
    exit();
?>