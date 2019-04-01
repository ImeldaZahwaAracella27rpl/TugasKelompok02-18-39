<h3>Edit Buku Tamu</h3>

<?php
$connect = mysqli_connect("localhost","root","","latihan");

//ambil id dari hasil klik link Edit
$id = $_GET['id'];

$edit = "SELECT * FROM tamu WHERE id_tamu='$id'";
$hasil = mysqli_query($connect, $edit);
$data = mysqli_fetch_array($hasil);

echo"<form method=\"GET\" action=\"update_tamu.php\">
    <input type=\"hidden\" name=\"id\" VALUE=\"$id\">
    Nama : <input type=\"text\" name=\"nama\" Value=\"$data[nama]\"> <br>
    Email : <input type=\"text\" name=\"email\" Value=\"$data[email]\"> <br>
    Pesan : <textarea name=\"pesan\" rows=\"5\" cols=\"30\">$data[pesan]</textarea> <br>
    <input type=\"submit\" value=\"Edit\">
    </form>";
?>