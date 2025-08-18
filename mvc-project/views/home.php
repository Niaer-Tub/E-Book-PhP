<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
</head>
<body>
    <h1>Daftar User</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user['name']; ?> - <?= $user['email']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
