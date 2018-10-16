<?php
	session_start();
	require_once("db.php");
	$nim 		= $_SESSION['nim'];
	$sql		= "SELECT * FROM mahasiswa where nim like '%$nim%'";
	$result		= mysqli_query($conn, $sql);
	$row		= mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
	<p><b>Hasil Pencarian</b></p>
		<th>Nim</th>
		<th>Nama</th>
		<th>Action</th>

		<?php
		if($row > 0){
			while ($row = mysqli_fetch_assoc($result)) {
				# code...
				$nim = $row['nim'];
				echo "<tr>";
				echo "<td>".$row['nim']."</td>";
				echo "<td>".$row['nama']."</td>";
				echo "<td>"."<a href='delete.php? nim=$nim'>Delete</a>"." "."<a href='detail.php ? nim=$nim'>Detail</a>"."</td>";
				echo "</tr>";
			}
		}else{
			echo "0 Result";
		}
		mysqli_close($conn);

		?>

		</table>
</body>
</html>