<?php
include("koneksi.php");
?>

<html>
</head>
        <body>
            <h1>Tarif Parkir</h1>
            <h4> <a href=tambah.php>Tambah</a></h4>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Jenis kendaraan</th>
                    <th>Jumlah jam parkir</th>
                    <th>Total biaya parkir</th>
</tr>

<?php
include("koneksi.php");
$sql = 'SELECT * FROM tb_parkir';
$query = mysqli_query($koneksi, $sql);
while($parkir=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$parkir['id_parkir']."</td>";
    echo "<td>".$parkir['jenis_kendaraan']."</td>";
    echo "<td>".$parkir['jumlah_jam_parkir']."</td>";
    echo "<td>".$parkir['total_biaya_parkir']."</td>";
    echo "<td>";
    echo "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>