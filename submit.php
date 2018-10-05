<?php
require_once("db.php");

$nama = $_POST["nama"];
$id = $_POST["id"];
$tgl_lahir = $_POST["tgl_lahir"];

$sql = "INSERT INTO siswa (nama,id,tgl_lahir) VALUES ('$nama','$id','$tgl_lahir')";

if (mysqli_query($conn, $sql)) {
    echo "created successfully<br>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "Silahkan klik <a href='list.php'>link ini</a> untuk melanjutkan";