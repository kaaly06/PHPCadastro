<?php

class ProdutoDAO
{
    private $conexao;

   function __contrucao()
   {
    $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
    $user = "root";
    $pass = "etecjau";
    
    $this->conexao = new PDO($dsn, $user, $pass);
   }

   function insert (ProdutoModel $model)
   {
    $sql = "INSERT INTO produto
              (nome, preco, descricao)
            VALUES (?,?, ?)";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(1, $model->nome);
    $stmt->bindValue(2, $model->preco);
    $stmt->bindValue(3, $model->descricao);

    //executa a consulta
    $stmt->execute();
   }   

   public function select()
   {
    $sql = "SELECT * FROM produto";

    $stmt = $this->conexao->prepare($sql);
    $stmt -> execute();
    return $stmt-> fetchAll();
   }

   public function selectByid(int $id)
   {
    include 'Model/ProdutoModel.php';

    $sql = "SELECT * FROM pessoa WHERE id= ?";

    $stmt = $this->conexao->prepare($sql);
    $stmt->bindvalue(1, $id);
    $stmt->execute();

    return $stmt->fetchObject("ProdutoModel");
   }

   public function update(ProdutoModel $model)
   {
       $sql = "UPDATE produto set nome=?, preco=?, descricao=? WHERE id=?";

       $stmt = $this->conexao->prepare($sql);
       $stmt->bindValue(1, $model->nome);
       $stmt->bindValue(2, $model->preco);
       $stmt->bindValue(3, $model->descricao);
       $stmt->bindValue(4, $model->id);
       $stmt->execute();
   }

   public function delete(int $id)
   {
    $sql = "DELETE FROM produto WHERE id= ?";

    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
   }
}