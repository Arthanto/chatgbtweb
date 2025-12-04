<?php
include 'config.php';
$id = $_POST['id'];
$nama = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];


if($nama != ""){
move_uploaded_file($tmp, "uploads/".$nama);
mysqli_query($conn, "UPDATE foto SET file='$nama' WHERE id='$id'");
}
header("location:index.php");
?>
