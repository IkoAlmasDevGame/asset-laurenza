<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
    $kode = htmlentities($_POST['kode']);
    $nama = htmlentities($_POST['subkategori']);

    $d = array($kode,$nama);
    $sql = "INSERT INTO m_subkategori (kode_subkategori,nama_subkategori) VALUES (?,?)";
    if($row = $koneksi->prepare($sql)){
        $row -> execute($d);
        header("location:data-sub.php?pesan=tambah");
    }else{
        if(empty($_POST['kode'] = "" && empty($_POST['subkategori'] = ""))){
            unset($_POST['submit']);
            empty($_POST['kode']);
            empty($_POST['subkategori']);
            header("location:data-sub.php?pesan=gagal");
        }
    }
}

?>