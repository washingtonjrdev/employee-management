<?php


class FuncionarioModel
{
    public $id, $nome, $sobrenome, $data_nascimento, $cargo, $salario;

    public $rows;

    public function save()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $dao->insert($this);


    }

    public function getAllRows()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $this->rows = $dao->select();


    }

    public function getById(int $id)
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        return $dao->selectById($id);

    }

}