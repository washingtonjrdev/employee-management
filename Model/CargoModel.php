<?php

class CargoModel
{
    public $id, $cargo;

    public $rows;

    public function save()
    {
        include 'DAO/CargoDAO.php';

        $dao = new CargoDAO();

        $dao->insert($this);

    }

    public function getAllRows()
    {
        include 'DAO/CargoDAO.php';

        $dao = new FuncionarioDAO();

        $this->rows = $dao->select();


    }


}