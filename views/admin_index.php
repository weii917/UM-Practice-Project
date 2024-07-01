<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Admin</title>
    <style>
        .form-box {
            border: 10px solid lightgrey;
            background-color: whitesmoke;
            padding-top: 200px;
            padding-bottom: 200px;
            padding-left: 275px
        }

        .button-box {
            display: flex;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <?php
    if (!isset($_SESSION["login"])) {
    ?>

        <div class="form-box">
            <h1>會員管理系統</h1>
            <p style="color:red">

                <?php
                if (isset($_GET['error'])) {
                    echo "*" . $_GET['error'];
                }
                ?>
            </p>

            <form action="/admin/login" method="post">

                <div>
                    <label for="account">帳號</label>
                    <input type="text" name="account" id="account" required>
                </div>

                <div>
                    <label for="password">密碼</label>
                    <input type="password" name="password" id="password" required>
                </div>


                <div class="button-box">
                    <input type="submit" value="登入">
                    <input type="reset" value="重置">
                </div>

            </form>
        </div>

    <?php
    } else {
        header("Location:/accounts/index");
    }
    ?>
</body>

</html>