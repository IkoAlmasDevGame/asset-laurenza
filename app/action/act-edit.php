<?php 
include("../database/koneksi.php");

if(isset($_POST['submit'])){
    $id = htmlentities($_POST['id']);
    $userEmail = htmlentities($_POST['userEmail']);
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    $user_level = htmlentities($_POST['user_level']);
    $bagian = htmlentities($_POST['bagian']);
    $operasional = htmlentities($_POST['operasional']);
    $cabang = htmlentities($_POST['cabang']);
    $telpone = htmlentities($_POST['telpone']);

    $ekstensi_diperbolehkan_foto = array('png', 'jpg', 'jpeg', 'jfif');
    $nama_foto = $_FILES['foto']['name'];
    $x_foto = explode('.', $nama_foto);
    $ekstensi_foto = strtolower(end($x_foto));
    $ukuran_foto = $_FILES['foto']['size'];
    $file_tmp_foto = $_FILES['foto']['tmp_name'];

    if(in_array($ekstensi_foto, $ekstensi_diperbolehkan_foto) === true){
        if($ukuran_foto < 10440070){
            move_uploaded_file($file_tmp_foto, "../../assets/image/" . $nama_foto);
            
            $sql = "UPDATE user_cabang SET userEmail='$userEmail', username='$username', password='$password', user_level='$user_level', bagian='$bagian', operasional='$operasional', cabang='$cabang', telpone='$telpone', foto='$nama_foto' where id_user_cabang='$id'";
            if($row = $kon->query($sql)){
                header("location:../view/dashboard/dashboard.php?pesan=edit");
            }else{
                header("location:../view/dashboard/dashboard.php?pesan=gagal");
            }
        }else{
            echo "GAGAL MENGUPLOAD FILE FOTO";
        }
    }else{
        echo "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
    }
}else{
    header("location:../view/dashboard/dashboard.php");
}

?>