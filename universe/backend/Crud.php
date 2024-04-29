<?php
namespace universe\backend;

use universe\backend\Pessoa;
use universe\backend\Jogo;

session_start();

    class Crud {
        public function create(Pessoa $p){
            $sql = 'INSERT INTO pessoa (nome,contato,email,senha) VALUES (?,?,?,?)';

            $create = Conexao::Conn()->prepare($sql);
            $create->bindValue(1, $p->getNome());
            $create->bindValue(2, $p->getContato());
            $create->bindValue(3, $p->getEmail());
            $create->bindValue(4, $p->getSenha());

            $create->execute();
        }

        public function read(){
            $sql = 'SELECT * FROM pessoa';

            $read = Conexao::Conn()->prepare($sql);
            $read->execute();

            if($read->rowCount() > 0):
                $resultado = $read->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            else:
                return [];
            endif;
        }

        public function edit($id){
            $sql = 'SELECT * FROM pessoa WHERE id = ?';

            $read = Conexao::Conn()->prepare($sql);
            $read->bindValue(1, $id);
            $read->execute();

            if($read->rowCount() > 0):
                $resultado = $read->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            else:
                return [];
            endif;
        }

        public function update(Pessoa $p){
            $sql1 = 'UPDATE pessoa SET nome = ?, contato = ?, email = ?, senha = ? WHERE id = ?';

            $update = Conexao::Conn()->prepare($sql1);
            $update->bindValue(1, $p->getNome());
            $update->bindValue(2, $p->getContato());
            $update->bindValue(3, $p->getEmail());
            $update->bindValue(4, $p->getSenha());
            $update->bindValue(5, $p->getId());

            $update->execute();

            $sql2 = 'SELECT id, nome, contato, email, senha FROM pessoa WHERE email = ? AND senha = ?';

            $login = Conexao::Conn()->prepare($sql2);
            $login->bindValue(1, $p->getEmail());
            $login->bindValue(2, $p->getSenha());
            $login->execute();

            if($login->rowCount() > 0):
                $dado = $login->fetch();
                $_SESSION['name'] = $dado['nome'];

                return true;
            else:
                return false;
            endif;
        }

        public function delete($id){
            $sql = 'DELETE FROM pessoa WHERE id = ?';

            $delete = Conexao::Conn()->prepare($sql);
            $delete->bindValue(1, $id);
            $delete->execute();
        }

        public function login(Pessoa $p){
            $sql = 'SELECT id, nome, contato, email, senha FROM pessoa WHERE email = ? AND senha = ?';

            $login = Conexao::Conn()->prepare($sql);
            $login->bindValue(1, $p->getEmail());
            $login->bindValue(2, $p->getSenha());
            $login->execute();

            if($login->rowCount() > 0):
                $dado = $login->fetch();
                $_SESSION['id'] = $dado['id'];
                $_SESSION['name'] = $dado['nome'];

                return true;
            else:
                return false;
            endif;
            
        }
    }
?>