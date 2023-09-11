<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
    $kodeKategori = htmlentities($_POST['kode_kategori']);
    $kodeSub = htmlentities($_POST['kode_subkategori']);
    $kodeRuas = htmlentities($_POST['kode_ruas']);
    $kodeGerbang = htmlentities($_POST['kode_gerbang']);
    $tahun = htmlentities($_POST['tahun_input']);
    $nomer = $kodeKategori." - ".$kodeSub." - ".$kodeRuas." - ".$kodeGerbang." - ".$tahun." - ";

    $d = array($kodeKategori,$kodeSub,$kodeRuas,$kodeGerbang,$tahun,$nomer);
    $sql = "INSERT INTO m_kodefikasi (kode_kategori,kode_subkategori,kode_ruas,kode_gerbang,tahun_input,nomer_seri_aset) VALUES (?,?,?,?,?,?)";
    if($row = $koneksi->prepare($sql)){
        $row->execute($d);
        header("location:data-kodefikasi.php?kode=yes");
    }else{
        if(empty($_POST['kode_kategori'] = "") && empty($_POST['kode_subkategori'] = "") &&
             empty($_POST['kode_ruas'] = "") && empty($_POST['kode_gerbang'] = "") &&
             empty($_POST['tahun_input'] = "")){
            unset($_POST['submit']);
            //
            empty($_POST['kode_kategori']);
            empty($_POST['kode_subkategori']);
            empty($_POST['kode_ruas']);
            empty($_POST['kode_gerbang']);
            empty($_POST['tahun_input']);
            //
            header("location:data-kodefikasi.php?pesan=gagal");
        }
    }
}

?>