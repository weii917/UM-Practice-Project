<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Accounts</title>
</head>

<body>
    <h1>會員系統</h1>
    <a href="accounts/new"><button>新增</button></a>
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
                    <a href="accounts/show?id=<?= $account["id"] ?>">
                        <p>編輯</p>
                    </a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>

    <!-- <?php foreach ($accounts as $account) : ?>
        <table>
            <tr>
                <td>
                    <a href="accounts/show?id=<?= $account["id"] ?>">
                        <h2><?= htmlspecialchars($account["account"]) ?> Account</h2>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <p>姓名: <?= htmlspecialchars($account["account"]) ?></p>
                </td>
            </tr>
        </table>



    <?php endforeach; ?> -->
</body>

</html>