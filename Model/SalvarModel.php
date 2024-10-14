<?php

    namespace Model;

    use PDO;
    use \Lib\db;

    class SalvarModel 
    {
        private $pdo;

        function __construct()
        {
            $this->pdo = new db;
            $this->pdo = $this->pdo->conn;
        }

        public function getDados($id)
        {
            $sql = "SELECT * FROM formulario WHERE id = :id";

            $r = $this->pdo->prepare($sql);
            $r->bindParam(':id', $id, PDO::PARAM_STR);
            $r->execute();

            return $r->fetch(PDO::FETCH_OBJ);
        }

        public function Get_pesquisa($pesquisa)
        {
            $sql = "SELECT * FROM formulario 
            WHERE login like '%$pesquisa%' OR nome_completo like '%$pesquisa%'
            ORDER BY login";
    
            return $this->pdo->query($sql);
        }

        public function insert($dados)
        {
            $sql = "INSERT INTO formulario(login, senha, nome_completo)
                    VALUES(:login, :senha, :nome_completo)";
            
            $r = $this->pdo->prepare($sql);
            $r->bindParam(":login", $dados['login'], PDO::PARAM_STR);
            $r->bindParam(":senha", $dados['senha'], PDO::PARAM_STR);
            $r->bindParam(":nome_completo", $dados['nome_completo'], PDO::PARAM_STR);
            $r->execute();
        }

        public function update($dados)
        {
            $sql = "UPDATE formulario SET
                    login         = :login,
                    senha         = :senha,
                    nome_completo = :nome_completo
                    WHERE id = :id";
            
            $r = $this->pdo->prepare($sql);
            $r->bindParam(':id',            $dados['id'],            PDO::PARAM_STR);
            $r->bindParam(':login',         $dados['login'],         PDO::PARAM_STR);
            $r->bindParam(':senha',         $dados['senha'],         PDO::PARAM_STR);
            $r->bindParam(':nome_completo', $dados['nome_completo'], PDO::PARAM_STR);
            $r->execute();
        }

        public function delete($id)
        {
            $sql = "DELETE FROM formulario WHERE id = :id";

            $r = $this->pdo->prepare($sql);
            $r->bindParam(':id', $id, PDO::PARAM_STR);
            $r->execute();
        }
    }