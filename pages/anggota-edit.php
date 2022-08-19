<?php
    $id_anggota=$_GET['id'];
    $sql="select * from tbl_anggota where id_anggota='$id_anggota'";
    $q_tampil_anggota=mysqli_query($db,$sql);
    $r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)
?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
	<form action='proses/anggota-edit-proses.php' method='post' enctype='multipart/form-data'>
	
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['id_anggota'];?>" class="isian-formulir isian-formulir-border" readonly></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Anggota</td>
			<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_anggota['nm_anggota'];?>" class="isian-formulir isian-formulir-border"></td>
		</tr>

        <?php
		if($r_tampil_anggota['jk_anggota']=="Pria")
		{
			?>
			<tr>
				<td class="label-formulir">Jenis Kelamin</td>
				<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Pria" checked>Pria</label></td>
			</tr>
			<tr>
				<td class="label-formulir"></td>
				<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Wanita">Wanita</td>
			</tr>
		<?php
		}
		else
		{
			?>
			<tr>
				<td class="label-formulir">Jenis Kelamin</td>
				<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Pria">Pria</label></td>
			</tr>
			<tr>
				<td class="label-formulir"></td>
				<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Wanita" checked>Wanita</td>
			</tr>
		<?php
		}
		?>

        <tr>
			<td class="label-formulir">Alamat Anggota</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" value="<?php echo $r_tampil_anggota['alamat_anggota']; ?>" class="isian-formulir isian-formulir-border"></textarea></td>
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
			<td class="isian-formulir">
			<img src="foto/<?php echo $r_tampil_anggota['foto_anggota']; ?>" width=70px height=75px>
			<input type="file" name="foto" class="isian-formulir isian-formulir-border">
			<input type="hidden" name="foto_awal" value="<?php echo $r_tampil_anggota['foto_anggota']; ?>">
			</td>
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