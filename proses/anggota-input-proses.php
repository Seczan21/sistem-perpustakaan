<?php 
include '../koneksi.php';
/* variabel untuk menerima data dari form */
$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$foto=$_POST['foto'];

if(isset($_POST['simpan']))
{
    // memindahkan file foto ke folder foto
    $nama_file=$_FILES['foto']['name'];
    if(!empty($nama_file))
    {
        // baca lokasi file smntr dan nama file dari form(fupload)
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $file_foto = $id_anggota.".".$tipe_file;

        //tentukan folder untuk menyimpan file
        $folder = "../foto/$file_foto";
        // apabila file berhasil di upload
        move_uploaded_file($lokasi_file,"$folder");
    } else 
        $file_foto="-";

    /* query insert ke db */
    $sql="INSERT INTO tbl_anggota VALUES('$id_anggota','$nama','$jenis_kelamin','$alamat','$file_foto')";
    $query=mysqli_query($db, $sql);
    header("location:../index.php?p=anggota");
}
