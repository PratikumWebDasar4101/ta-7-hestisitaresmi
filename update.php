
<?php
session_start();
require_once("db.php");

// menyimpan data kedalam variabel
$nim			= $_POST['nim'];
$nama 			= $_POST['nama'];
$prodi 			= $_POST['prodi'];
$jeniskelamin	= $_POST['jeniskelamin'];
$fakultas		= $_POST['fakultas'];
$asal			= $_POST['asal'];
$moto			= $_POST['moto'];



// query SQL untuk insert data
$sql 			="UPDATE mahasiswa SET nim='$nim',nama='$nama',prodi='$prodi', jeniskelamin='$jeniskelamin',  fakultas='$fakultas', asal='$asal', moto ='$moto' where nim='$nim'";


if(mysqli_query($conn, $sql)){
	header("Location:detail.php");
}else{
	echo "Error: ".$sql. "<br>".mysqli_error($conn);
}





?>




