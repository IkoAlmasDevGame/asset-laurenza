<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
    $kode = htmlentities($_POST['kode']);
    $nama = htmlentities($_POST['gerbang']);
    $lokasi = htmlentities($_POST['lokasi']);

    $d = array($kode,$nama,$lokasi);
    $sql = "INSERT INTO m_gerbang (kode_gerbang,nama_gerbang,lokasi_gerbang) VALUES (?,?,?)";

    if($row = $koneksi->prepare($sql)){
        header("location:data-gerbang.php?pesan=tambah");
        $row->execute($d);
    }else{
        header("location:data-gerbang.php?pesan=gagal");
    }
}
?>