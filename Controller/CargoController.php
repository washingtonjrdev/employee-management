<?php

class CargoController
{
    public static function index()
    { 
        include 'View/modules/Cargo/ListaCargo.php';
    }

    public static function form()
    {
        include 'View/modules/Cargo/FormCargo.php';
    }

    public static function save()
    {
        include 'Model/CargoModel.php';

        $model = new CargoController();

        $model->cargo = $_POST['cargo'];

        $model->save();

    }








}