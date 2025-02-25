<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Accounts</title>
</head>

<body>

    <?php
    if (isset($_SESSION["login"])) {
    ?>
        <h1>會員系統</h1>
        <a href="/accounts/new"><button>新增</button></a>
        <a href="/admin/logout">登出</a>



        <table>
            <tr>
                <td>姓名</td>
                <td>帳號</td>
                <td>性別</td>
                <td>地址</td>
                <td>電話</td>
                <td>操作</td>
            </tr>
            <?php foreach ($accounts as $account) : ?>
                <tr>
                    <td>
                        <p><?= htmlspecialchars($account["name"]) ?></p>
                    </td>
                    <td>
                        <p><?= htmlspecialchars($account["account"]) ?></p>
                    </td>
                    <td>
                        <p><?= htmlspecialchars($account["sex"]) ?></p>
                    </td>
                    <td>
                        <p><?= htmlspecialchars($account["address"]) ?></p>
                    </td>
                    <td>
                        <p><?= htmlspecialchars($account["telephone"]) ?></p>
                    </td>
                    <td>
                        <a href="/accounts/show?id=<?= $account["id"] ?>">
                            <p>編輯</p>
                        </a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    <?php
    } else {
        header("Location:/admin/index");
    }
    ?>


  
</body>

</html>