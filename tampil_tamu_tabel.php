<h3>Data Tamu</h3>

<?php

$connect = mysqli_connect("localhost","root","","latihan");

$tampil = "SELECT * FROM tamu ORDER by id_tamu";
$hasil = mysqli_query($connect, $tampil);

echo "<table width = 500 border =1>
    <tr>
        <th>Nama</th>
        <th>E-mail</th>
        <th>Pesan</th>
    </tr>";    

while($data = mysqli_fetch_array($hasil)){
    echo "<tr>
        <td>$data[nama]</td>
        <td>$data[email]</td>
        <td>$data[pesan]</td>
    </tr>";
}
echo "</table>";
?>
