<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
    $kode = htmlentities($_POST['kode']);
    $nama = htmlentities($_POST['kategori']);

    $d = array($kode,$nama);
    $sql = "INSERT INTO m_kategori (kode_kategori,nama_kategori) VALUES (?,?)";

    if($row = $koneksi->prepare($sql)){
        header("location:data-kategori.php?pesan=tambah");
        $row->execute($d);
    }else{
        header("location:data-kategori.php?pesan=gagal");
    }
}
?>