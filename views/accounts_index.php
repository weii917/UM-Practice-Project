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

    <?php foreach ($accounts as $account) : ?>
        <a href="accounts/show?id=<?= $account["id"] ?>">
            <h2><?= htmlspecialchars($account["name"]) ?> Account</h2>
        </a>

        <p><?= htmlspecialchars($account["account"]) ?></p>
    <?php endforeach; ?>
</body>

</html>