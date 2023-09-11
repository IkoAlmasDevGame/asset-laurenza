<?php 
include("../../database/koneksi.php");

$id = htmlentities($_GET['id']);
$d = array($id);
$sql = "DELETE FROM m_gerbang WHERE id_gerbang=?";
if($row = $koneksi->prepare($sql)){
    $row->execute($d);
    header("location:data-gerbang.php?pesan=hapus");
}else{
    header("location:data-gerbang.php?pesan=gagal");
}
?>