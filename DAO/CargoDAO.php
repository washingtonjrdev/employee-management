<?php

class CargoDAO
{

    private $conexao;

    public function __construct()
    {
        $dsn ="mysql:host=localhost:3306;dbname=employee_management";

        $this->conexao = new PDO($dsn, 'root', 'root');

    }

    public function insert(CargoModel $model)
    {
        $sql = "INSERT INTO cargo (cargo) VALUES (?)";
        
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->cargo);

        $stmt->execute();
        header("Location: /cargo");

    }

    public function update(CargoModel $model)
    {
        $sql = "UPDATE cargo SET cargo=? WHERE id=?";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->cargo);
        $stmt->bindValue(2, $model->id);

        $stmt->execute();

    }

    public function selectById(int $id)
    {

        include 'Model/CargoModel.php'; 

        $sql = "SELECT * FROM cargo WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CargoModel");

    }

    public function select()
    {
        $sql = "SELECT * FROM cargo";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function delete($id)
    {
        $sql = "SELECT * FROM cargo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

}