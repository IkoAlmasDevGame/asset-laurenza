<?php 
include("../../database/koneksi.php");

$id = htmlentities($_GET['id']);
$d = array($id);
$sql = "DELETE FROM m_inventori WHERE id_inventori=?";
if($row = $koneksi->prepare($sql)){
    $row->execute($d);
    header("location:data-inventori.php?pesan=hapus");
}else{
    header("location:data-inventori.php?pesan=gagal");
}
?>