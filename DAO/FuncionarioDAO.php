<?php

class FuncionarioDAO
{

    private $conexao;

    public function __construct()
    {
        $dsn ="mysql:host=localhost:3306;dbname=employee_management";

        $this->conexao = new PDO($dsn, 'root', 'root');

    }

    public function insert(FuncionarioModel $model)
    {
        $sql = "INSERT INTO funcionario (nome, sobrenome, data_nascimento, cargo, salario) VALUES (?,?,?,?,?)";
        
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->sobrenome);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->cargo);
        $stmt->bindValue(5, $model->salario);

        $stmt->execute();
        header("Location: /funcionario");

    }

    public function update(FuncionarioModel $model)
    {
        $sql = "UPDATE funcionario SET nome=?, sobrenome=?, data_nascimento=?, cargo=?, salario=? WHERE id=?";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->sobrenome);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->cargo);
        $stmt->bindValue(5, $model->salario);
        $stmt->bindValue(6, $model->id);

        $stmt->execute();

    }

    public function select()
    {
        $sql = "SELECT * FROM funcionario";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectById(int $id)
    {

        include 'Model/FuncionarioModel.php'; 

        $sql = "SELECT * FROM funcionario WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FuncionarioModel");

    }

    public function delete($id)
    {
        $sql = "SELECT * FROM funcionario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }




}