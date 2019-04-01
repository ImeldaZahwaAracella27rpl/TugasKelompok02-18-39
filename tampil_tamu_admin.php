<h3>Data Tamu</h3>
<p><a href="form_tamu.php">Input Tamu</a></p>

<?php
$connect=mysqli_connect("localhost","root","","latihan");
$tampil="SELECT * FROM tamu ORDER BY id_tamu";
$hasil=mysqli_query($connect,$tampil);
$total=mysqli_num_rows($hasil);
echo "<table width = 700 border =1>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>E-mail</th>
        <th>Pesan</th>
        <th>Aksi</th>
    </tr>";

//nomor awal untuk pengurutan
$no = 1;

while ($data=mysqli_fetch_array($hasil)) {
    echo "<tr>
            <td>$no</td>
            <td>$data[nama]</td>
            <td>$data[email]</td>
            <td>$data[pesan]</td>
    <td><a href=\"edit_tamu.php?id=$data[id_tamu]\">Edit</a> |
    <a href=\"hapus_tamu.php?id=$data[id_tamu]\">Hapus</a></td>
    </tr>";

    //tambahkan $no dengan 1
    $no++;
    
}
echo "</table>";
echo "<p>Jumlah tamu: <b>$total</b> Orang</p>";
?>