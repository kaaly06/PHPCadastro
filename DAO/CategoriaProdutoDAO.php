<?php

 class CategoriaProdutoDAO
 {
   private $conexao;

   function __contrucao()
   {
    $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
    $user = "root";
    $pass = "etecjau";
    
    $this->conexao = new PDO($dsn, $user, $pass);
   }

   function insert(CategoriaProdutoModel $model) 
    {
        // Trecho de código SQL com marcadores ? para substituição posterior, no prepare   
      $sql = "INSERT INTO categoria produto (descricao) VALUES (?)";

      $stmt = $this->conexao->prepare($sql);

      $stmt->bindValue(1, $model->descricao);

      $stmt->execute();
    }

    public function update(CategoriaProdutoModel$model)
   {
     $sql = "UPDATE categoria produto SET descricao=? WHERE id=?";

   }

   public function select()
   {
    $sql = "SELECT * FROM categoria produto";

    $stmt = $this -> conexao -> prepare ($sql);
    $stmt -> execute ();
    return $stmt -> fetchAll(PDO::FETCH_CLASS);
   }

  public function selectBYid(int $id)
  {
    $sql = "SELECT * FROM categoria produto WHERE id=?";

       $stmt = $this->conexao->prepare($sql);
       $stmt->bindvalue(1, $id);
       $stmt->execute();

       return $stmt->fetchObject("CategoriaProdutoModel");
  }

  public function delete(int $id)
  {
    $sql = "DELETE FROM categoria produto WHERE id= ?";

    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
  }
}