<?php 
include("../../database/koneksi.php");

$id = htmlentities($_GET['id']);
$d = array($id);
$sql = "DELETE FROM m_ruas WHERE id_ruas=?";
if($row = $koneksi->prepare($sql)){
    $row->execute($d);
    header("location:data-ruas.php?pesan=hapus");
}else{
    header("location:data-ruas.php?pesan=gagal");
}
?>