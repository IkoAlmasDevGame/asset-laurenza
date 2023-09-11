<?php 
include("../../database/koneksi.php");

$id = htmlentities($_POST['id']);
$nama = htmlentities($_POST['subkategori']);

$d = array($nama,$id);
$sql = "UPDATE m_subkategori SET nama_subkategori=? WHERE id_subkategori=?";
if($row = $koneksi->prepare($sql)){
    $row -> execute($d);
    header("location:data-sub.php?pesan=edit");
}else{
    if(empty($_POST['kode'] = "" && empty($_POST['subkategori'] = ""))){
        unset($_POST['submit']);
        empty($_POST['kode']);
        empty($_POST['subkategori']);
        header("location:data-sub.php?pesan=gagal");
    }
}

?>