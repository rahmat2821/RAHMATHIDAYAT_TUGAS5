<!DOCTYPE html>
<html>
<head>
    <title>Form PHP</title>
</head>
<body>

<form method="get">

    Nama <br>
    <input type="text" name="nama" placeholder="Masukkan nama">
    <br>

    Alamat <br>
    <input type="text" name="alamat" placeholder="Masukkan alamat">
    <br>

    <input type="submit" value="Submit">

</form>

<?php

if(isset($_GET['nama']) && isset($_GET['alamat']))
{
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];

    echo "<b>Nama:</b> $nama <br>";
    echo "<b>Alamat:</b> $alamat";
}

?>

</body>
</html>





