<?php
	session_start();
	require_once("db.php");
// menyimpan data id kedalam variabel
	$nim   = $_GET['nim'];
// query SQL untuk insert data
	$sql="DELETE from mahasiswa where nim='$nim'";
	mysqli_query($conn, $sql);
// mengalihkan ke halaman index.php
	header("Location:lihat.php");

?>