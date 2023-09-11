<?php 
include("../../database/koneksi.php");

$id = htmlentities($_POST['id']);
$status = htmlentities($_POST['status']);

$sql = "UPDATE m_approve SET status=? where id_approve=?";
if($row = $koneksi->prepare($sql)){
    $row->execute(array($status,$id));
    header("location:data-approve.php?page=approve&pesan=edit");
}else{
    header("location:data-approve.php?page=approve&pesan=gagal");
}

?>