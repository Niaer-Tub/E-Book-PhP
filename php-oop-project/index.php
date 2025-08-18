<?php
require_once "includes/config.php";
require_once "classes/Mahasiswa.php";

$mhs1 = new Mahasiswa("Rain", "12345");
$mhs2 = new Mahasiswa("Budi", "67890");
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP OOP Project</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Selamat Datang di Project PHP OOP</h1>
    <p><?php echo $mhs1->perkenalan(); ?></p>
    <p><?php echo $mhs2->perkenalan(); ?></p>
    <a href="about.php">Tentang Project</a>
</body>
</html>
