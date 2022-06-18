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

        include 'Model/FuncionarioModel.php';
        $model = new FuncionarioModel();

        include 'View/modules/Funcionario/FormFuncionario.php';
    }

    public static function save()
    {
        include 'Model/FuncionarioModel.php';

        $model = new FuncionarioModel();
        
        $model->nome = $_POST['nome'];
        $model->sobrenome = $_POST['sobrenome'];
        $model->data_nascimento = $_POST['data_nascimento'];
        $model->cargo = $_POST['cargo'];
        $model->salario = $_POST['salario'];

        $model->save();

    }

}

