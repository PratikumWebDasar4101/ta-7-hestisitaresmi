

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="simpan.php" method="POST">
			<tr>
				<td colspan="3"><a href="lihat.php">Lihat Data Mahasiswa</a></td>
				
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" name="nim" maxlength="10"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" maxlength="35"></td>
			</tr>
			
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki<br>
					<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br>
				</td>
			</tr>
			
			<tr>
				<td>Prodi</td>
				<td>:</td>
				<td>
					<select name="prodi">
  					<option value="D3MI">D3MI</option><br>
  					<option value="D3TK">D3TK</option><br>
  					<option value="D3KA">D3KA</option><br>
  					<option value="D3TT">D3TT</option><br>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
  					<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option><br>
  					<option value="Fakultas Teknik Informatika">Fakultas Teknik Informatika</option><br>
  					<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option><br>
  					<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option><br>
  					<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option><br>
  					<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option><br>
  					<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal"></td>

			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><textarea type="text" name="moto"></textarea></td>
			</tr>
			<tr>
				<td colspan="3" rows="20" cols="80"><input type="submit" name="submit" value="Submit"></td>
			</tr>
			
		</form>
	</table>

</body>
</html>
			
		