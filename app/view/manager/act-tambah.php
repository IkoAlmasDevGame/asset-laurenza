<?php 
    include("../../database/koneksi.php");

    $kategori = htmlentities($_POST['kategori']);
    $subkategori = htmlentities($_POST['subkategori']);
    $ruas = htmlentities($_POST['ruas']);
    $gerbang = htmlentities($_POST['gerbang']);
    $nomer = htmlentities($_POST['nomer']);
    $merk = htmlentities($_POST['merk']);
    $status = htmlentities($_POST['status']);

    $d = array($kategori,$subkategori,$ruas,$gerbang,$nomer,$merk,$status);
    $sql = "INSERT INTO m_approve (kode_kategori,kode_subkategori,kode_ruas,kode_gerbang,nomer_seri_aset,merk_aset,status) VALUES (?,?,?,?,?,?,?)";
    if($row = $koneksi->prepare($sql)){
        $row -> execute($d);
        header("location:data-approve.php?page=request&pesan=tambah");
    }else{
        header("location:data-approve.php?page=request&pesan=gagal");
    }
?>