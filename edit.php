<?php
include 'config.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM foto WHERE id='$id'");
d = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head><title>Edit Foto</title></head>
<body>
<h2>Edit Foto</h2>
<img src="uploads/<?= $d['file']; ?>" height="120"><br><br>
<form action="proses_edit.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $d['id']; ?>">
Ganti Foto:<br>
<input type="file" name="foto"><br><br>
<button type="submit">Simpan</button>
</form>
</body>
</html>
