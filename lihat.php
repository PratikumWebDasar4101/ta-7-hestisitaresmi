<?php
	session_start();
	require_once("db.php");


?>

<!DOCTYPE>
<html>
<head>
	<title></title>
	

</head>
<body>
	<table border="1">
		
			<form action="cari.php" method="POST">
				<input type="text" name="nim" placeholder="Cari Nim Mahasiswa">
				<input type="submit" name="cari" value="cari">

			</form>
			&nbsp;&nbsp;&nbsp;&nbsp;
				<a href='form.php' >Input Data</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href='logout.php'>Logout</a>
		<br><br>
		<th>Nim</th>
		<th>Nama</th>
		<th>Action</th>



		
	
		<?php
			$sql	= "SELECT * FROM mahasiswa";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					# code...
					
					$nim = $row['nim'];
					echo "<tr>";
					echo "<td>";
					echo $row['nim'];
					echo "</td>";
					echo "<td>";
					echo $row['nama'];
					echo "</td>";
					echo "<td>"."<a href='delete.php?nim=$nim'>Delete</a>"." "."<a href='detail.php?nim=$nim'>Detail</a>"."</td>";
					echo "</tr>";	

					
					

				}
			}else{
				echo "0 result";
			}
			mysqli_close($conn);

		?>


		
	</table>

</body>
</html>