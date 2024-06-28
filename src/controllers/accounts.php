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
        $accountId = $_GET['id'];
        $account = $model->find($accountId);

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

    public function edit()
    {
        require "src/models/account.php";
        $model = new Account;
        $accountId = $_GET['id'];
        $account = $model->find($accountId);
        require "views/accounts_edit.php";
    }
    public function update()
    {
        require "src/models/account.php";
        $model = new Account;
        $account = $model->find($_POST["id"]);
        $account["name"] = $_POST["name"];
        $account["account"] = $_POST["account"];
        $account["password"] = $_POST["password"];
        $account["telephone"] = $_POST["telephone"];
        $account["sex"] = $_POST["sex"];
        $account["address"] = $_POST["address"];
        $account["email"] = $_POST["email"];
        if ($model->update($account["id"], $account)) {
            header("Location:/accounts/show?id={$account["id"]}");
            exit;
        }
    }

    public function delete()
    {
        require "src/models/account.php";
        $model = new Account;
        $accountId = $_GET['id'];

        if ($model->delete($accountId)) {
            header("Location:/");
            exit;
        }
    }
}
