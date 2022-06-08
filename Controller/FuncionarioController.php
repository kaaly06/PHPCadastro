<?php

class FuncionarioController
{
    public static function index()
    {
        include 'Model/FuncionarioModel.php';
        $model = new FuncionarioModel();
        $model->getAllRows();
        include 'View/modules/Funcionario/ListaFuncionario.php';
    }

    public static function form()
    {
        include 'View/modules/Funcionario/ListaFuncionario.php';
    }

    public static function save()
    {
        include 'Model/FuncionarioModel.php';

        $funcionario = new FuncionarioModel();
        $funcionario-> id = $_POST['id'];
        $funcionario->nome = $_POST['nome'];
        $funcionario->genero = $_POST['genero'];
        $funcionario->email = $_POST['email'];
        $funcionario->endereco = $_POST['endereco'];
        $funcionario->telefone = $_POST['telefone'];
        $funcionario->cargo = $_POST['cargo'];

        $funcionario->save();

        header("Location: /funcionario" );
    }

    #método para tratar a rota delete
    public static function delete ()
    {
        include 'Model/FuncionarioModel.php';

        $model = new FuncionarioModel();
        $model ->delete( (int) $_GET['id'] );

        header("Location: /funcionario"); 
    }
}
