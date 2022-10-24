<html>

<head>
	<title>Tampil Data Siswa</title> 
</head> 

<body> 
	<center> 
		<table> 
			<tr> 
				<th colspan="3"> 
					D-Lemas : Tampil Data Siswa 
				</th> 
			</tr> 
			<tr> 
				<td colspan="3"> 
					<hr> 
				</td> 
			</tr> 
			<tr> 
				<td><b>Nama Siswa</b></td> 
				<th>:</th> 
				<td> 
					<?= $nama; ?> 
				</td> 
			</tr> 
			<tr> 
				<td><b>NIS</b></td> 
				<td>:</td> 
				<td> 
					<?= $nis; ?> 
				</td> 
			</tr> 
			<tr> 
				<td><b>Kelas</b></td> 
				<td>:</td> 
				<td> 
					<?= $kelas; ?> 
				</td> 
			</tr> 
			<tr>
				<td><b>Tanggal Lahir</b></td> 
				<td>:</td> 
				<td> 
					<?= $tanggallahir; ?> 
				</td> 
			</tr> 
			<tr>
				<td><b>Tempat Lahir</b></td> 
				<td>:</td> 
				<td> 
					<?= $tempatlahir; ?> 
				</td> 
			</tr> 
			<tr>
				<td><b>Alamat</b></td> 
				<td>:</td> 
				<td> 
					<?= $alamat; ?> 
				</td> 
			</tr> 
			<tr>
				<td><b>Jenis Kelamin</b></td> 
				<td>:</td> 
				<td> 
					<?= $jeniskelamin; ?> 
				</td> 
			</tr> 
			<tr>
				<td><b>Agama</b></td> 
				<td>:</td> 
				<td> 
					<?= $agama; ?> 
				</td> 
			</tr> 
			<tr>
				<td colspan="3" align="center"> 
					<a href="<?= base_url('Tugas_uts'); ?>">Kembali</a> 
				</td>
			</tr> 
		</table>
	</center> 
</body> 
</html>