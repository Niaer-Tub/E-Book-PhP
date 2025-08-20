<?php 
include "koneksi.php"; 
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Student</h2>
    <form method="post">
        Nama: <input type="text" name="name" value="<?= $row['name']; ?>"><br><br>
        Email: <input type="email" name="email" value="<?= $row['email']; ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $name  = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE students SET name='$name', email='$email' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil diupdate <a href='index.php'>Kembali</a>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
