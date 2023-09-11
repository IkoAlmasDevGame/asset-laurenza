<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
    $userEmail = htmlentities($_POST['userEmail']);
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    $user_level = htmlentities($_POST['user_level']);
    $bagian = htmlentities($_POST['bagian']);
    $operasional = htmlentities($_POST['operasional']);
    $cabang = htmlentities($_POST['cabang']);
    $telpone = htmlentities($_POST['telpone']);
    $foto = "default.jfif";

    // timestamp
    $oncreated = date("y-m-d H:i:s a");
    $onupdated = date("y-m-d H:i:s a");

    $d = array($userEmail,$username,$password,$user_level,$bagian,$operasional,$cabang,$telpone,$foto,$oncreated,$onupdated);
    $sql = "INSERT INTO user_cabang (userEmail,username,password,user_level,bagian,operasional,cabang,telpone,foto,onCreated,onUpdated) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    if($row = $koneksi->prepare($sql)){
        header("location:../dashboard/dashboard.php");
        $row->execute($d);
    }else{
        if(!empty($_GET['page'] == "divisi")){
            header("location:daftar.php?page=divisi");
        }else if(!empty($_GET['page'] == "cabang")){
            header("location:daftar.php?page=cabang");
        }
    }
}
?>