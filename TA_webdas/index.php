<?php
require_once("db.php");
session_start();
if (isset($_SESSION["user_nim"])) {
$nim = $_SESSION["user_nim"];
$sql = "SELECT * FROM user WHERE nim='$nim'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);?>
<!DOCTYPE html>
<html lang="en">
<head><title>Index</title></head>
<body><header><table align="center">
<td align="center"><a href="index.php">Awal</a> -
<a href="daftarposting.php">Daftar Posting</a> - 
<a href="semuaposting.php">Semua Posting</a> - 
<a href="editprofil.php">Edit Profil</a> - 
<a href="posting.php">Post</a> - 
<a href="logout.php">Logout</a>
</td></table></header>
<table align="center"><br>
<tr><td><h2>Data Diri Anda</h2></td></tr>
<tr><td>Nama</td>
<td><?php echo $row["nama"] ?></td>
</tr>
<tr><td>NIM</td>
<td><?php echo $row["nim"] ?></td>
</tr>
<tr><td>Kelas</td>
<td><?php echo $row["kelas"] ?></td>
</tr>
<tr><td>Jenis Kelamin</td>
<td><?php echo $row["jk"] ?></td>
</tr>
<tr><td>Hobi</td>
<td><?php echo $row["hobi"] ?></td></tr>
<tr><td>Fakultas</td>
<td><?php echo $row["fakultas"] ?></td>
</tr>
<tr><td>Alamat</td>
<td><?php echo $row["alamat"] ?></td>
</tr>
</table>
</body>
</html>
<?php
}else {
echo "Silahkan Login";
}