<?php

class FuncionarioModel
//declarando as propriedades dos campos da tebla funcionario
{
   public $id, $nome, $genero;
   public $email, $endereco, $telefone, $cargo;

   public function save() 
   {
      include "DAO/FuncionarioDAO.php";
      $dao = new FuncionarioDAO();
      
      if($this->id == null)
      {
         $dao->insert($this);
      }

      else
      {
         // update
         $dao -> update($this); 
      }      
   }

   public function getAllRows()
   {
      include 'DAO/FuncionarioDAO.php';

      $dao = new FuncionarioDAO();

      $this->rows = $dao->select();
   } 

   public function getId(int $id)
   {
       include 'DAO/FuncionarioDAO.php';

       $dao = new FuncionarioDAO();
       $obj = $dao->selectByid($id);

       return ($obj) ? $obj: new FuncionarioModel();
   }

   public function delete (int $id)
   {
       include 'DAO/FuncionarioDAO.php'; // Incluíndo o arquivo DAO

       $dao = new FuncionarioDAO();
       $dao->delete($id);
   }

}
