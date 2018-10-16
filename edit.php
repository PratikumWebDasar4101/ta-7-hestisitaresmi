<?php
session_start();
require_once("db.php");

$nim 		= $_GET['nim'];
$mahasiswa 	= mysqli_query($conn, "SELECT * from mahasiswa where nim='$nim'");
$row        = mysqli_fetch_array($mahasiswa);
$fakultas   = array ('Fakultas Teknik Elektro', 'Fakultas Teknik Informatika', 'Fakultas Rekayasa Industri','Fakultas Industri Kreatif', 'Fakultas Komunikasi Bisnis','Fakultas Ilmu Terapan');


function active_radio_button($value,$input){
    
    $result =  $value==$input?'checked':'';
    return $result;
}
?>


<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
	<table >
		<form action="update.php" method="POST">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" value="<?php echo $row['nim'];?>" name="nim" maxlength="10"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nama'];?>" name="nama" maxlength="35"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td>:</td>
				<td>
					<input type="radio" value="D3MI"<?php echo active_radio_button ("D3MI",$row['prodi'])?> name="prodi" >D3MI<br>
					<input type="radio" value="D3TT"<?php echo active_radio_button ("D3TT",$row['prodi'])?>  name="prodi" >D3TT<br>
					<input type="radio" value="D3TK"<?php echo active_radio_button ("D3TK",$row['prodi'])?> name="prodi" >D3TK<br>
					<input type="radio" value="D3IF"<?php echo active_radio_button ("D3IF",$row['prodi'])?> name="prodi" >D3IF<br>
					<input type="radio" value="DESISMED"<?php echo active_radio_button ("D3SISMED",$row['prodi'])?> name="prodi">D3SISMED<br>
					<input type="radio" value="D3KA"<?php echo active_radio_button ("D3KA",$row['prodi'])?> name="prodi">D3KA<br>
					
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" value="Laki-Laki"<?php echo active_radio_button ("Laki-Laki",$row['jeniskelamin'])?> name="jeniskelamin" >Laki-Laki<br>
					<input type="radio" value="Perempuan"<?php echo active_radio_button ("Perempuan",$row['jeniskelamin'])?> name="jeniskelamin" >Perempuan<br>
				</td>
			</tr>
			
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
						<?php
						foreach ($fakultas as $j){
                                echo "<option value='$j' ";
                                echo $row['fakultas']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                        ?>

  					</select>

				</td>
			</tr>

			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['asal'];?>"  name="asal"></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['moto'];?>"  name="moto"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="submit" value="Simpan Perubahan"></td>
			</tr>
			
		</form>
	</table>

</body>
</html>