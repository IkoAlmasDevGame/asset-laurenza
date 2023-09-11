<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nomor = trim($_POST['nomer_seri_aset']);
    $merkasset = trim($_POST['merk_aset']);
    $tahunasset = trim($_POST['tahun_input']);
    $harga = trim($_POST['harga_perolehan']);
    $masa = trim($_POST['masa_penyusutan_aset']);
    $waktu = trim($_POST['waktu_penyusutan_aset']);
    $kondisi = trim($_POST['kondisi_aset']);
    $lokasi = trim($_POST['lokasi_aset']);

    $ekstensi_diperbolehkan_foto = array('png', 'jpg', 'jpeg', 'jfif');
    $nama_foto = $_FILES['foto_aset']['name'];
    $x_foto = explode('.', $nama_foto);
    $ekstensi_foto = strtolower(end($x_foto));
    $ukuran_foto = $_FILES['foto_aset']['size'];
    $file_tmp_foto = $_FILES['foto_aset']['tmp_name'];

    if(in_array($ekstensi_foto, $ekstensi_diperbolehkan_foto) === true){
        if($ukuran_foto < 10440070){
            move_uploaded_file($file_tmp_foto, "../../../assets/image/inventori/" . $nama_foto);

            $query = "UPDATE m_inventori SET nomer_seri_aset='$nomor', merk_aset='$merkasset', tahun_input='$tahunasset', harga_perolehan='$harga', masa_penyusutan_aset='$masa', waktu_penyusutan_aset='$waktu', kondisi_aset='$kondisi', lokasi_aset='$lokasi', foto_aset='$nama_foto' where id_inventori='$id'";
            $result = mysqli_query($kon, $query);
            if(!$result){
                die("Error Database : ".mysqli_errno($kon));
            }else{
                header("location:data-inventori.php?pesan=tambah");
            }
        }else{
            echo "GAGAL MENGUPLOAD FILE FOTO";
        }
    }else{
        echo "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
    }
}else{
    header("location:data-inventori.php?pesan=gagal");
}

?>