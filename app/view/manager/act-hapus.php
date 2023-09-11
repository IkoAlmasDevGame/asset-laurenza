<?php 
include("../../database/koneksi.php");

$id = htmlentities($_GET['id']);
$d = array($id);
$sql = "DELETE FROM m_approve WHERE id_approve=?";
if($row = $koneksi->prepare($sql)){
    $row->execute($d);
    header("location:data-approve.php?page=approve&pesan=hapus");
}else{
    header("location:data-kodefikasi.php??page=approve&pesan=gagal");
}
?>