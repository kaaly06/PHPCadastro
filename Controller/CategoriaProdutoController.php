<?php

class CategoriaProdutoController
{
    
    public static function index()
        {
            include 'View/modules/CategoriaProduto/ListaCategoriaProduto.php';
            $model = new CategoriaProdutoModel();
            $model->getAllRows();
        }

    public static function form()
    {
       include 'View/modules/CategoriaProduto/FormCategoriaProduto.php';

    }

    public static function save()
    {
        include 'Model/CategoriaProdutoModel.php'; 

         // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
        // pelo usuário no formulário (note o envio via POST)
        $CategoriaProduto = new PessoaModel();
        $CategoriaProduto->descricao = $_POST['descricao'];

        $pessoa->save(); // chamando o método save da model.

        header("Location: /Categoriaproduto"); // redirecionando o usuário para outra rota.
    }

    #método para tratar a rota delete
    public static function delete()
    {
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();
        $model ->delete( (int) $_GET['id'] );

        header("Location: /categoriaproduto"); 
    }
}
