<?php 

include("../../database/koneksi.php");
if(isset($_POST['submit'])){
    $id = htmlentities($_POST['id']);
    $kode = htmlentities($_POST['kode_ruas']);
    $nama = htmlentities($_POST['nama_ruas']);
    $panjang = htmlentities($_POST['panjang_ruas']);
    $lokasi = htmlentities($_POST['lokasi_ruas']);
    $jumlah = htmlentities($_POST['jumlah_ruas']);

    $d = array($kode,$nama,$panjang,$lokasi,$jumlah,$id);
    $sql = "UPDATE m_ruas SET kode_ruas=?, nama_ruas=?, panjang_ruas=?, lokasi_ruas=?, jumlah_ruas=? where id_ruas=?";
    if($row = $koneksi->prepare($sql)){
        $row->execute($d);
        header("location:data-ruas.php?pesan=edit");
    }else{
        header("location:data-ruas.php?pesan=gagal");        
    }
}

?>