<?php 
include("../../database/koneksi.php");

$id = htmlentities($_GET['id']);
$nama = htmlentities($_POST['kategori']);
$d = array($nama, $id);

$sql = "UPDATE m_kategori SET nama_kategori=? WHERE id_kategori=?";
if($row = $koneksi->prepare($sql)){
    $row->execute($d);
    header("location:data-kategori.php?pesan=edit");
}else{
    header("location:data-kategori.php?pesan=gagal");
}

?>