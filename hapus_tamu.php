<?php
$connect = mysqli_connect("localhost","root","","latihan");
//ambil id dari hasil klik link Hapus
$id = $_GET['id'];

$hapus = "DELETE FROM tamu WHERE id_tamu='$id'";
$hasil = mysqli_query($connect, $hapus);
//apabila query untuk menghapus data benar
if($hasil){
    //lakukan redirect
    header("location:tampil_tamu_admin.php");
}
else{
    echo "Hapus Data Tamu Gagal";
}
?>