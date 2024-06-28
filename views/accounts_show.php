<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

    <title>Accounts</title>
</head>

<body>
    <h1><?= $account["name"] ?> Account</h1>
    <a href="/"><button>取消</button></a>
    <table>
        <tr>
            <td>姓名</td>
            <td><?= $account["name"] ?></td>
        </tr>
        <tr>
            <td>帳號</td>
            <td><?= $account["name"] ?></td>
        </tr>
        <tr>
            <td>性別</td>
            <td><?= $account["sex"] ?></td>
        </tr>
        <tr>
            <td>地址</td>
            <td><?= $account["address"] ?></td>
        </tr>
        <tr>
            <td>電話</td>
            <td><?= $account["telephone"] ?></td>
        </tr>
    </table>
    <button>編輯</button>
    <button>刪除</button>


</body>

</html>