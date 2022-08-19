<?php
include 'koneksi.php';
?>
<h1>DATA ANGGOTA</h1>

<p>
  <!-- Link ke Tambah Anggota -->
  <a href="index.php?p=anggota-input" class="tombol">Tambah Data Anggota</a>
</p>

<table id="tabel-tampil">
  <tr>
    <th>No</td>
    <th>ID Anggota</th>
    <th>Nama Anggota</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Foto Anggota</th>
    <th>Opsi</th>
  </tr>
  <!--Query menampilkan data-->
  <?php
	$sql = "select * from tbl_anggota";
	$q_tampil_anggota = mysqli_query($db, $sql);
	$nomor = 1;
	//perulangan menampilkan data anggota
	while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
	?>
  <tr>
    <td><?php echo $nomor; ?></td>
    <td><?php echo $r_tampil_anggota['id_anggota']; ?></td>
    <td><?php echo $r_tampil_anggota['nm_anggota']; ?></td>
    <td><?php echo $r_tampil_anggota['jk_anggota']; ?></td>
    <td><?php echo $r_tampil_anggota['alamat_anggota']; ?></td>
    <td><img src="foto/<?php echo $r_tampil_anggota['foto_anggota']; ?>" width=70px height=70px></td>
    <td>
      <a href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['id_anggota']; ?>" class="tombol">EDIT</a>
      <a href="proses/anggota-delete.php?id=<?php echo $r_tampil_anggota['id_anggota']; ?>" class=" tombol">DELETE</a>
    </td>
  </tr>
  <?php
		$nomor++;
	}
	?>
</table>