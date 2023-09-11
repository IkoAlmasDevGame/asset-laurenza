<?php 
include("../../database/koneksi.php");

$id = htmlentities($_GET['id']);
$d = array($id);
$sql = "DELETE FROM m_kodefikasi WHERE id_kodefikasi=?";
if($row = $koneksi->prepare($sql)){
    $row->execute($d);
    header("location:data-kodefikasi.php?pesan=hapus");
}else{
    header("location:data-kodefikasi.php?pesan=gagal");
}
?>