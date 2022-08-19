<div id="label-page"><h3>Input Data Anggota</h3></div>
<div id="content">
	<form action='proses/anggota-input-proses.php' method='post' enctype='multipart/form-data'>
	
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Anggota</td>
			<td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Pria">Pria</label></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Wanita">Wanita</td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat Anggota</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"></textarea></td>
		</tr>
		<!-- <tr>
			<td class="label-formulir">Status Anggota</td>
			<td class="isian-formulir">
				<select name="status">
					<option value="AKTIF">AKTIF</option>
					<option value="TIDAK AKTIF">TIDAK AKTIF</option>
				</select>
			</td>
		</tr> -->
		<tr>
			<td class="label-formulir">Foto Anggota</td>
			<td class="isian-formulir"><input type="file" name="foto" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir">
			<input type="submit" name="simpan" value="SIMPAN" class="tombol">
			<input type="reset" name="reset" value="RESET" class="tombol">
			</td>
		</tr>
	</table>
	</form>
</div>