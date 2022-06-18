<?php

include 'Controller/FuncionarioController.php';
include 'Controller/CargoController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        echo "pagina inicial";
    break;
    
    case '/funcionario':
         FuncionarioController:: index();
    break;
    
    case '/funcionario/form':
        FuncionarioController:: form();
    break;

    case '/funcionario/form/save':
        FuncionarioController:: save();
    break;

    case '/cargo':
        CargoController:: index();
    break;

    case '/cargo/form':
        CargoController:: form();
    break;

    case '/cargo/form/save':
        CargoController:: save();
    break;

    default:
        echo "Erro 404";
    break;

}