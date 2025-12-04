<?php
include 'config.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM foto WHERE id='$id'");
d = mysqli_fetch_assoc($data);


if(file_exists("uploads/".$d['file'])){
unlink("uploads/".$d['file']);
}


mysqli_query($conn, "DELETE FROM foto WHERE id='$id'");
header("location:index.php");
?>
