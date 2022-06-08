<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $uri_parse;
//echo "<hr />";

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
include 'Controller/CategoriaProdutoController.php';
include 'Controller/FuncionarioController.php';

switch($uri_parse)
{
     #rotas para pessoa

    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    #rotas para produto

    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        PessoaController::delete();
    break;
    
    #rotas para categoria produto

    case 'categoriaproduto':
        CategoriaProdutoController::index();
    break;

    case '/categoriaproduto/form':
        CategoriaProdutoController::form();
    break;

    case '/categoriaproduto/save':
        CategoriaProdutoController::save();
    break;

    case '/categoriaproduto/delete':
        PessoaController::delete();
    break;

    #rotas para funcionário

    case '/funcionario':
        FuncionarioController::index();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/delete':
        PessoaController::delete();
    break;

    default;
        echo "error 404";
    break;
}
