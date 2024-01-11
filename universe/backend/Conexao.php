<?php
namespace universe\backend;

    class Conexao{
        private static $instance;

        public static function Conn(){
            if(!isset(self::$instance)):
                self::$instance = new \PDO('mysql:host=localhost;dbname=universe;charset=utf8', 'root', '');
            endif;

            return self::$instance;
        }
    }
?>