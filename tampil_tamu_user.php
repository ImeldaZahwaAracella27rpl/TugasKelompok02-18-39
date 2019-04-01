<h3>Data Tamu</h3>

<?php
$connect = mysqli_connect("localhost","root","","latihan");

//query untuk menampilkan data
$tampil = "SELECT * from tamu ORDER by id_tamu";
$hasil = mysqli_query($connect, $tampil);

//tampilkan nama, email dan pesan di browser
while($data = mysqli_fetch_array($hasil)){
    echo "Nama : $data[nama] <br>";
    echo "E-mail : $data[email] <br>";
    echo "Pesan : $data[pesan] <br><hr>";
}

?>