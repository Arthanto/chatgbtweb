<?php
include 'config.php';
$nama = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];


if(!is_dir('uploads')) mkdir('uploads');


if(move_uploaded_file($tmp, "uploads/".$nama)){
mysqli_query($conn, "INSERT INTO foto (file) VALUES ('$nama')");
}
header("location:index.php");
?>
