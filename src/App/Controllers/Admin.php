<?php


namespace App\Controllers;

use App\Models\Account;

session_start();
class Admin
{
    public function index()
    {
        require "views/admin_index.php";
    }

    public function login()
    {

        $adminAcc = "admin";
        $adminPw = $_POST['password'];

        $model = new Account;

        $admin = $model->login($adminAcc);


        if ($admin["account"] == $adminAcc && $admin["password"] == $adminPw) {
            $_SESSION["login"] = $admin["account"];
            header("Location:/accounts");
        } else {
            header("Location:/admin/index?error=請重新輸入");
        }
    }


    public function logout()
    {

        session_destroy();
        header("Location:/admin/index");
    }
}
