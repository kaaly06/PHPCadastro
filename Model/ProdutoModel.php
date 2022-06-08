<?php

class ProdutoModel
{
    public $id, $nome, $preco, $descricao;

    public function save()
    {
       include 'DAO/ProdutoModel.php';

       $dao = new ProdutoDAO();

       if($this->id == null) 
       {
        $dao->insert($this);
       }

       else
       {
         //update
         $dao-> update($this);
       }
    }

    public function getAllRows()
    {
        include 'DAO/ProdutoDAO.php';
        $dao = new ProdutoDAO();
        $this->rows = $dao->select();       
    }

    public function getById(int $id)
    {
        include 'DAO/ProdutoDAO.php';
        
        $dao = new ProdutoDAO();
        $obj = $dao->selectByid($id);

        return ($obj) ? $obj: new ProdutoModel();
    }

    public function delete (int $id)
    {
        include 'DAO/ProdutoDAO.php'; // Incluíndo o arquivo DAO

        $dao = new ProdutoDAO();
        $dao->delete($id);
    }
}