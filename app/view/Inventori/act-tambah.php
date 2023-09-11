<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
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

            $query = "INSERT INTO m_inventori (id_inventori,nomer_seri_aset,merk_aset,tahun_input,harga_perolehan,masa_penyusutan_aset,waktu_penyusutan_aset,kondisi_aset,lokasi_aset,foto_aset) VALUES ('','$nomor','$merkasset','$tahunasset','$harga','$masa','$waktu','$kondisi','$lokasi','$nama_foto')";
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