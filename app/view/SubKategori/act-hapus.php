<?php 
include("../../database/koneksi.php");

$id = htmlentities($_GET['id']);
$d = array($id);
$sql = "DELETE FROM m_subkategori WHERE id_subkategori=?";
if($row = $koneksi->prepare($sql)){
    $row->execute($d);
    header("location:data-sub.php?pesan=hapus");
}else{
    header("location:data-sub.php?pesan=gagal");
}
?>