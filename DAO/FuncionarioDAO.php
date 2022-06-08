<?php

 class FuncionarioDAO
 {
   private $conexao;

   function __contrucao()
   {
    $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
    $user = "root";
    $pass = "etecjau";
    
    $this->conexao = new PDO($dsn, $user, $pass);
   }

   function insert (FuncionarioModel $model)
   {
     $sql = "INSERT INTO funcionario (nome, genero, email, endereco, telefone, cargo )
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(1, $model->nome);
    $stmt->bindValue(2, $model->genero);
    $stmt->bindValue(5, $model->email);
    $stmt->bindValue(6, $model->telefone);
    $stmt->bindValue(7, $model->endereco);
    $stmt->bindValue(4, $model->cargo);

    $stmt-> execute();
   }

   public function update(FuncionarioModel$model)
   {
     $sql = "UPDATE funcionario SET nome=?, genero=?, email=?, telefone=?, endereco=?, cargo=? WHERE id=?";

   }

   public function select()
   {
    $sql = "SELECT * FROM funcionario";

    $stmt = $this -> conexao -> prepare ($sql);
    $stmt -> execute ();
    return $stmt -> fetchAll(PDO::FETCH_CLASS);
   }

  public function selectBYid(int $id)
  {
    $sql = "SELECT * FROM funcionario WHERE id=?";

       $stmt = $this->conexao->prepare($sql);
       $stmt->bindvalue(1, $id);
       $stmt->execute();

       return $stmt->fetchObject("FuncionarioModel");
  }

  public function delete(int $id)
  {
    $sql = "DELETE FROM funcionario WHERE id= ?";

    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
  }

 }