<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
    $id = htmlentities($_POST['id']);
    $kodeKategori = htmlentities($_POST['kode_kategori']);
    $kodeSub = htmlentities($_POST['kode_subkategori']);
    $kodeRuas = htmlentities($_POST['kode_ruas']);
    $kodeGerbang = htmlentities($_POST['kode_gerbang']);
    $tahun = htmlentities($_POST['tahun_input']);
    $nomer = $kodeKategori." - ".$kodeSub." - ".$kodeRuas." - ".$kodeGerbang." - ".$tahun." - ";

    $sql = "UPDATE m_kodefikasi SET kode_kategori='$kodeKategori', kode_subkategori='$kodeSub', kode_ruas='$kodeRuas', kode_gerbang='$kodeGerbang', tahun_input='$tahun', nomer_seri_aset='$nomer' where id_kodefikasi='$id'";
    if($row = $kon->query($sql)){
        header("location:data-kodefikasi.php?kode=yes");
    }else{
            header("location:data-kodefikasi.php?pesan=gagal");
    }
}

?>