<?php
require_once("db.php");

$id = $_POST["id"];
$nama = $_POST["nama"];
$tgl_lahir = $_POST["tgl_lahir"];

$sql = "UPDATE siswa SET nama='$nama', tgl_lahir='$tgl_lahir' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
	header("Location:list.php");
    echo "successfully";
}else {
    echo "Error updating record: " . $sql . "<br>" . mysqli_error($conn);
}