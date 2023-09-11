<?php 
include("../../database/koneksi.php");

$id = htmlentities($_GET['id']);
$d = array($id);
$sql = "DELETE FROM m_kategori WHERE id_kategori=?";
if($row = $koneksi->prepare($sql)){
    $row->execute($d);
    header("location:data-kategori.php?pesan=hapus");
}else{
    header("location:data-kategori.php?pesan=gagal");
}
?>