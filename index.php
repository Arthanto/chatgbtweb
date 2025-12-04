<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Galeri Foto</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Galeri Foto</h2>
<a href="tambah.php">Tambah Foto</a><br><br>


<table border="1" cellpadding="8">
<tr><th>ID</th><th>Foto</th><th>Aksi</th></tr>
<?php
$data = mysqli_query($conn, "SELECT * FROM foto ORDER BY id DESC");
while($d = mysqli_fetch_assoc($data)){
?>
<tr>
<td><?= $d['id']; ?></td>
<td><img src="uploads/<?= $d['file']; ?>" height="100"></td>
<td>
<a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
<a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin hapus foto?')">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
</body>
</html>
