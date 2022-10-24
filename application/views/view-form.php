<html> 
	<head> 
		<title>D-Lemas : Form Input Data Siswa</title> 
	</head> 

<body> 
	<center> 
		<form action="<?= base_url('tugas_uts/cetak'); ?>" method="post"> 
			<table> 
				<tr> 
					<th colspan="3"> 
						D-Lemas : Form Input Data Siswa
					</th> 
				</tr>
				<tr> 
					<td colspan="3"> 
						<hr> 
					</td> 
				</tr> 
				<tr> 
					<th>Nama Siswa</th> 
					<th>:</th> 
					<td> 
						<input type="text" name="nama" id="nama" value="<?= set_value ('nama');?>"> 
					</td> 
				</tr> 
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?= form_error('nama'); ?></font>
					</td>
				</tr>
				
				<tr>
					<th>NIS</th> 
					<td>:</td> 
					<td> 
						<input type="text" name="nis" id="nis" value="<?= set_value ('nis');?>"> 
					</td>
				</tr> 
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?=form_error('nis'); ?></font>
					</td>
				</tr>
				
				<tr>
					<th>Kelas</th> 
					<td>:</td> 
					<td> 
						<input type="text" name="kelas" id="kelas" value="<?= set_value ('kelas');?>"> 
					</td>
				</tr> 
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?=form_error('kelas'); ?></font>
					</td>
				</tr>
				
				<tr>
					<th>Tanggal Lahir</th> 
					<td>:</td> 
					<td> 
						<input type="text" name="tanggal lahir" id="tanggal lahir" value="<?= set_value ('tanggal lahir');?>"> 
					</td>
				</tr> 
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?=form_error('tanggal lahir'); ?></font>
					</td>
				</tr>
				
				<tr>
					<th>Tempat Lahir</th> 
					<td>:</td> 
					<td> 
						<input type="text" name="tempat lahir" id="tempat lahir" value="<?= set_value ('tempat lahir');?>"> 
					</td>
				</tr> 
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?=form_error('tempat lahir'); ?></font>
					</td>
				</tr>
				
				<tr>
					<th>Alamat</th> 
					<td>:</td> 
					<td> 
						<input type="text" name="alamat" id="alamat" value="<?= set_value ('alamat');?>"> 
					</td>
				</tr> 
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?=form_error('alamat'); ?></font>
					</td>
				</tr>
				
				<tr>
					<th>Jenis Kelamin</th> 
					<td>:</td> 
					<td> 
						<input type="radio" name="jenis kelamin" value="Laki-Laki">Laki-Laki<br>
						<input type="radio" name="jenis kelamin" value="Perempuan">Perempuan<br>
					</td>
				</tr>
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?= form_error('jenis kelamin');?></font>
					</td>
				</tr>
						
				
				<tr> 
					<th>Agama</th> 
					<td>:</td> 
					<td> 
						<select name="agama">
							<option value="" <?php echo set_select('sks', '', TRUE); ?> >Pilih Agama</option>
							<option value="Islam"<?php echo set_select('agama', 'Islam'); ?> >Islam</option> 
							<option value="Kristen"<?php echo set_select('agama', 'Kristen'); ?> >Kristen</option> 
							<option value="Katolik"<?php echo set_select('agama', 'Katolik'); ?> >Katolik</option> 
							<option value="Budha"<?php echo set_select('agama', 'Budha'); ?> >Budha</option> 
							<option value="Hindu"<?php echo set_select('agama', 'Hindu'); ?> >Hindu</option> 
							<option value="Protestan"<?php echo set_select('agama', 'Protestan'); ?> >Protestan</option> 
							<option value="Khonghucu"<?php echo set_select('agama', 'Khonghucu'); ?> >Khonghucu</option> 
						</select> 
					</td> 
				</tr> 
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?= form_error('agama');?></font>
					</td>
				</tr>
				
				<tr> 
					<td colspan="3" align="center"> 
						<input type="submit" value="Submit"> 
					</td> 
				</tr> 
			</table> 
		</form> 
	</center> 
</body> 

</html>