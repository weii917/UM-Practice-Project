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
        require "views/accounts_show.php";
    }
}
