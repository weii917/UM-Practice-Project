<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
</head>

<body>
    <h1>Accounts</h1>

    <?php foreach ($accounts as $account) : ?>
        <h2><?= htmlspecialchars($account["name"]) ?> Account</h2>
        <p><?= htmlspecialchars($account["account"]) ?></p>
    <?php endforeach; ?>
</body>

</html>