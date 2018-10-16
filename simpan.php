<?php
	session_start();
	require_once("db.php");

	if(isset($_POST['submit'])){

	$nim	= $_POST['nim'];
	$_SESSION['nim']	= $nim;

	$nama	= $_POST['nama'];
	$_SESSION['nama']	= $nama;

	$jeniskelamin	= $_POST['jeniskelamin'];
	$_SESSION['jeniskelamin']	= $jeniskelamin;

	$prodi	= $_POST['prodi'];
	$_SESSION['prodi']	= $prodi;

	$fakultas	= $_POST['fakultas'];
	$_SESSION['fakultas']	= $fakultas;

	$asal	= $_POST['asal'];
	$_SESSION['asal']	= $asal;

	$moto	= $_POST['moto'];
	$_SESSION['moto']	= $moto;

	}

	$sql	= "INSERT INTO 	mahasiswa(nim, nama, jeniskelamin, prodi, fakultas, asal, moto)
				VALUES ('$nim','$nama','$jeniskelamin','$prodi', '$fakultas', '$asal', '$moto')";


	if(mysqli_query($conn,$sql)){
		
		header("Location:lihat.php");
	}else{
		echo "Error : ".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);


?>