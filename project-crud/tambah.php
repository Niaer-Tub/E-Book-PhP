<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Student</h2>
    <form method="post">
        Nama: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name  = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil disimpan <a href='index.php'>Kembali</a>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
