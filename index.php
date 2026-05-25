<?php 
include 'koneksi.php';

if(isset($_POST['kirim'])){
    mysqli_query($koneksi, "insert into tb_users set
    username = '$_POST[username]',
    email = '$_POST[email]',
    password = '$_POST[password]'
    ");

    header("location: beranda.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <center>
        <h3>selamat datang di dalam web pendaftaran</h3>
        <form method="POST">
         <label for="">nama:</label>
         <input type="text" name="username" id="" required><br><br>
         <label for="">email:</label>
         <input type="email" name="email" id="" required><br><br>
         <label for="">password:</label>
         <input type="password" name="password" id="" required><br><br>
         <input type="submit" value="submit" name="kirim">
        </form>
    </center>
</body>
</html>