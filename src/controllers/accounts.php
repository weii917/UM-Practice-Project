<?php

class Accounts
{
    public function index()
    {
        require "src/models/account.php";
        $model = new Account;

        $accounts = $model->getData();


        require "views/accounts_index.php";
    }

    public function show()
    {
        require "src/models/account.php";
        $model = new Account;
        $id = $_GET['id'];
        $account = $model->find($id);

        require "views/accounts_show.php";
    }

    public function new()
    {
        require "views/accounts_new.php";
    }

    public function create()
    {
        require "src/models/account.php";
        $model = new Account;
        $data = [
            "name" => $_POST["name"],
            "account" => $_POST["account"],
            "password" => $_POST["password"],
            "telephone" => $_POST["telephone"],
            "sex" => $_POST["sex"],
            "address" => $_POST["address"],
            "email" => $_POST["email"],
        ];
        // echo $model->insert($data);
        if ($model->insert($data)) {
            header("Location:/");
            exit;
        }
    }
}
