<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $jenis_kendaraan =$_POST['jenis_kendaraan'];
    $jumlah_jam_parkir =$_POST['jumlah_jam_parkir'];
    $total_biaya_parkir =$_POST['total_biaya_parkir'];

    $sql ="INSERT INTO tb_parkir(jenis_kendaraan, jumlah_jam_parkir, total_biaya_parkir) VALUES ('$jenis_kendaraan', '$jumlah_jam_parkir', '$total_biaya_parkir')";
    $query = mysqli_query ($koneksi, $sql);
    if($query){
        header('Location:tabel.php?status-sukses');
    }else{
        header('Location:tabel.php?status-gagal');
    }
} 

?>