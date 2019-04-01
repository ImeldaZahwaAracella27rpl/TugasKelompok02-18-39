<?php

//koneksi ke database
$connect = mysqli_connect("localhost","root","","latihan");

//ambil variabel yang dikirim dari form
$nama = $_GET['nama'];
$email = $_GET['email'];
$pesan = $_GET['pesan'];

$input = "INSERT INTO tamu(nama,email,pesan)
        VALUES('$nama','$email','$pesan')";
$hasil = mysqli_query($connect, $input);

//apabila query untuk menginput data benar
if ($hasil){
    //lakukan redirect
    header("location:tampil_tamu_admin.php");
}
else{
    echo "Input Data Tamu Gagal";
}

?>