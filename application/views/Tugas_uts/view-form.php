<html> 
	<head> 
		<title>Form Input Data Siswa</title> 
	</head> 

<body> 
	<center> 
		<form action="<?= base_url('Tugas_uts/cetak'); ?>" method="post"> 
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
					<td><b>Nama Siswa</b></td> 
					<td><b>:</b></td> 
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
					<td><b>NIS</b></td> 
					<td><b>:</b></td>  
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
					<td><b>Kelas</b></td> 
					<td><b>:</b></td>
					<td> 
					<input type="text" name="kelas" id="nis" value="<?= set_value ('kelas');?>"> 
					</td>
				</tr> 
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?= form_error('kelas'); ?></font>
					</td>
				</tr>
				
				<tr>
				<tr>
					<th align="left">Tanggal Lahir<br>
						<font style="font-size:12;">(format : 2021-04-23)</font>
					</th>
					<td><b>:</b></td>
					<td> 
					<input type="text" name="tanggallahir" id="tanggallahir" value="<?= set_value ('tanggallahir');?>"> 
					</td>
				</tr> 
		
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?= form_error('tanggallahir'); ?></font>
					</td>
				</tr>
				
				<tr>
					<td><b>Tempat Lahir</b></td>
					<td><b>:</b></td>
					<td> 
					<input type="text" name="tempatlahir" id="tempatlahir" value="<?= set_value ('tempatlahir');?>"> 
					</td>
				</tr> 
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?= form_error('tempatlahir'); ?></font>
					</td>
				</tr>
				
				<tr>
					<td><b>Alamat</b></td> 
					<td><b>:</b></td>
					<td> 
					<input type="text" name="alamat" id="alamat" value="<?= set_value ('alamat');?>"> 
					</td>
				</tr> 
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?= form_error('alamat'); ?></font>
					</td>
				</tr>
				
				<tr>
					<td><b>Jenis Kelamin</b></td> 
					<td><b>:</b></td>
					<td> 
					<input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki<br>
					<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br>
					</td>
				</tr>
				
				<tr> 
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:12; align:center;"><?= form_error('jeniskelamin');?></font>
					</td>
				</tr>
						
				
				<tr> 
					<td><b>Agama</b></td> 
					<td><b>:</b></td>
					<td> 
					<select name="agama">
					<option value="" <?php echo set_select('agama', '', TRUE); ?> >Pilih Agama</option>
					<option value="2"<?php echo set_select('agama', '2'); ?> >Islam</option> 
					<option value="3"<?php echo set_select('agama', '3'); ?> >Kristen</option> 
					<option value="4"<?php echo set_select('agama', '4'); ?> >Katolik</option> 
					<option value="5"<?php echo set_select('agama', '5'); ?> >Budha</option> 
					<option value="6"<?php echo set_select('agama', '6'); ?> >Hindu</option> 
					<option value="7"<?php echo set_select('agama', '7'); ?> >Protestan</option> 
					<option value="8"<?php echo set_select('agama', '8'); ?> >Khonghucu</option> 
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
					<td colspan="3"> 
						<hr> 
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