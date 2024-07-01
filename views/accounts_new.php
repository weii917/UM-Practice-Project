<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        .row {
            display: flex;
            margin: 10px;
        }

        .row label {
            margin-right: 100px;
        }
    </style>
    <title>Accounts</title>
</head>

<body>
    <h1>會員註冊</h1>
    <a href="/accounts/index"><button>返回</button></a>

    <form action="/accounts/create" method="post">
        <div class="row">
            <label for="name">姓名</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="row">
            <label for="account">帳號</label>
            <input type="text" name="account" id="account" required>
        </div>

        <div class="row">
            <label for="password">密碼</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="row">
            <label for="telephone">電話</label>
            <input type="text" name="telephone" id="telephone" required>
        </div>

        <div class="row">
            <label for="sex">性別</label>
            <select name="sex" id="sex" required>
                <option value="M">男生</option>
                <option value="W">女生</option>
                <option value="O">其他</option>
            </select>
        </div>

        <div class="row">
            <label for="address">地址</label>
            <input type="text" name="address" id="address" required>
        </div>

        <div class="row">
            <label for="email">信箱</label>
            <input type="email" name="email" id="email" autocomplete="email" required>
        </div>

        <div class="row">
            <input type="submit" value="送出">
        </div>

    </form>


</body>

</html>