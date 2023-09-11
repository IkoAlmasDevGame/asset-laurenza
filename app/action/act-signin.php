<?php 
include("../database/koneksi.php");
session_start();
if(isset($_POST['submit'])){
    $userEmail = trim($_POST['userEmail']);
    $password = trim($_POST['password']);
    $onUpdated = date("y-m-d H:i:s a");

    if($userEmail == "" || $password == ""){
        header("location:../view/tampilan/signin.php?pesan=kosong");
        exit(0);
    }

    $data = "SELECT * FROM user_cabang WHERE userEmail='$userEmail' and password='$password' || username='$userEmail' and password='$password'";
    $cek = $koneksi->prepare($data);
    $cek->execute();
    $cekdata = $cek->rowCount();

    password_verify($password, PASSWORD_DEFAULT);

    if($cekdata > 0){
        $response = array($userEmail, $password, $onUpdated);
        $response['user_cabang'] = array();
        if($row = $cek->fetch()){
            if($row['user_level'] == "Administrator"){
                $_SESSION['id_user_cabang'] = $row['id_user_cabang'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['bagian'] = $row['bagian'];
                $_SESSION['operasional'] = $row['operasional'];
                $_SESSION['cabang'] = $row['cabang'];
                $_SESSION['foto'] = $row['foto'];
                $_SESSION['user_level'] = "Administrator";

                header("location:../view/dashboard/dashboard.php?pesan=berhasil");
            }else if($row['user_level'] == "Staff"){
                $_SESSION['id_user_cabang'] = $row['id_user_cabang'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['bagian'] = $row['bagian'];
                $_SESSION['operasional'] = $row['operasional'];
                $_SESSION['cabang'] = $row['cabang'];
                $_SESSION['foto'] = $row['foto'];                
                $_SESSION['user_level'] = "Staff";

                header("location:../view/dashboard/dashboard.php?pesan=berhasil");
            }else if($row['user_level'] == "Manager"){
                $_SESSION['id_user_cabang'] = $row['id_user_cabang'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['bagian'] = $row['bagian'];
                $_SESSION['operasional'] = $row['operasional'];
                $_SESSION['cabang'] = $row['cabang'];
                $_SESSION['foto'] = $row['foto'];
                $_SESSION['user_level'] = "Manager";

                header("location:../view/dashboard/dashboard.php?pesan=berhasil");
            }else if($row['user_level'] == "Vice President"){
                $_SESSION['id_user_cabang'] = $row['id_user_cabang'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['bagian'] = $row['bagian'];
                $_SESSION['operasional'] = $row['operasional'];
                $_SESSION['cabang'] = $row['cabang'];
                $_SESSION['foto'] = $row['foto'];                
                $_SESSION['user_level'] = "Vice President";

                header("location:../view/dashboard/dashboard.php?pesan=berhasil");
            }
            $_SESSION['statusCek'] = true;
            $rowdata = $kon->query("UPDATE user_cabang SET onUpdated='$onUpdated' WHERE userEmail='$userEmail'");
            $rowdata2 = $kon->query("UPDATE user_cabang SET onUpdated='$onUpdated' WHERE username='$userEmail'");
            array_push($response['user_cabang'], $response);
        }
    }else{
        $_SESSION['statusCek'] = false;
        header("location:../view/tampilan/signin.php?pesan=gagal");
        exit(0);
    }
}
?>