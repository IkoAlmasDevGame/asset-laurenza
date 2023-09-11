<?php 
include("../../database/koneksi.php");

$id = htmlentities($_POST['id']);
$kode = htmlentities($_POST['kode']);
$nama = htmlentities($_POST['gerbang']);
$lokasi = htmlentities($_POST['lokasi']);

$d = array($kode,$nama,$lokasi,$id);
$sql = "UPDATE m_gerbang SET kode_gerbang=?, nama_gerbang=?, lokasi_gerbang=? where id_gerbang=?";

if($row = $koneksi->prepare($sql)){
    header("location:data-gerbang.php?pesan=edit");
    $row->execute($d);
}else{
    header("location:data-gerbang.php?pesan=gagal");
}
?>