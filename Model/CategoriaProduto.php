<?php

class CategoriaProdutoModel
{
   public $descricao ;

   public function save() 
   {
     include "DAO/CategoriaProdutoDAO.php";
     $dao = new CategoriaProdutoDAO();
    
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
      include 'DAO/CategoriaProdutoDAO.php';

      $dao = new CategoriaProdutoDAO();

      $this->rows = $dao->select();
   } 

   public function getId(int $id)
   {
    include 'DAO/CategoriaProdutoDAO.php';

    $dao = new CategoriaProdutoDAO();
    $obj = $dao->selectByid($id);

    return ($obj) ? $obj: new CategoriaProdutoModel();
   }

   public function delete (int $id)
   {
       include 'DAO/CategoriaProdutoDAO.php'; // Incluíndo o arquivo DAO

       $dao = new CategoriaProdutoDAO();
       $dao->delete($id);
   }

}