<?php
 session_start();
 require_once "db.php";
 $nim = $_GET['nim'];

?>
<!DOCTYPE>
<html>
<head>
	<title>Awal</title>
</head>
<body>
	<table  >
		<form >
			<tr>
				<?php
				echo "<td>"."<a href='edit.php?nim=$nim'>Edit</a>"
				?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="form.php">Input Data</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href='logout.php'>Logout</a>
				</td>
			</tr>

			
				<?php

					
 					$sql = "SELECT * FROM mahasiswa where nim='$nim'" ;
					$result = mysqli_query($conn, $sql);
					$row =mysqli_fetch_assoc($result);
 					#code...
 					echo "<tr>";
 					echo "<td  >"."<br><br>"."SELAMAT DATANG ".$row['nama']."</td>";
 					echo "</tr>";

 					echo "<tr >";
 					echo "<td colspan=4>"."Nim : "."<br>-".$row['nim']."<br><br>";
 					echo "Nama : "."<br>-".$row['nama']."<br><br>";
 					echo "Prodi : "."<br>-".$row['prodi']."<br><br>";
 					echo "Jenis Kelamin	:"."<br>-".$row['jeniskelamin']."<br><br>";
 					
 					echo "Fakultas : "."<br>-".$row['fakultas']."<br><br>";
 					echo "Asal : "."<br>-".$row['asal']."<br><br>";
 					echo "Moto :"."<br>-".$row['moto']."</td>";
 					
 					echo "</tr>";
 		
					 	
					mysqli_close($conn);

				?>

		</form>
	</table>

</body>
</html>