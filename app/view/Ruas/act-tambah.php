<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
    $kode = htmlentities($_POST['kode_ruas']);
    $nama = htmlentities($_POST['nama_ruas']);
    $panjang = htmlentities($_POST['panjang_ruas']);
    $lokasi = htmlentities($_POST['lokasi_ruas']);
    $jumlah = htmlentities($_POST['jumlah_ruas']);

    $d = array($kode,$nama,$panjang,$lokasi,$jumlah);
    $sql = "INSERT INTO m_ruas (kode_ruas,nama_ruas,panjang_ruas,lokasi_ruas,jumlah_ruas) VALUES (?,?,?,?,?)";

    if($row = $koneksi->prepare($sql)){
        header("location:data-ruas.php?pesan=tambah");
        $row->execute($d);
    }else{
        header("location:data-ruas.php?pesan=gagal");
    }
}
?>