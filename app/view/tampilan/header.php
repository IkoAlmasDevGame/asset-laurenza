<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Dashboard Inventori</title>

    <?php 
        session_start();
        
        include("../../config/config.php");
        include("../../config/auth.php");
        include("../../database/koneksi.php");
        include("../../controller/controllerView.php");

        include $view;
        $lihat = new view($koneksi);

        if(isset($_GET['aksi'])){
            $aksi = $_GET['aksi'];
            if($aksi == "keluar"){
                if(isset($_SESSION['statusCek'])){
                    unset($_SESSION['statusCek']);
                    session_unset();
                    session_destroy();
                    $_SESSION = array();
                }
                header("location:signin.php");
                exit;
            }
        }
    ?>
    <link rel="stylesheet" href="<?=base("dist/css/all.min.css")?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base("dist/css/bootstrapv5222.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/bootstrapv5223.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/carousel.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/close.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/modal.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/card.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/col-bootstrap.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/glyphicon.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/fontawesome.min.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/style-2.css")?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
    
    <link rel="stylesheet" href="<?=base("dist/css/dataTables.bootstrap4.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/jquery.dataTables.min.css")?>">

    <link rel="shortcut icon" href="<?=base('assets/icon/Hutama_karya.png')?>" type="image/x-icon">
</head>
<body>
    <div class="app">
        <div class="layout">
            <div class="layoutAuthentication">
                <main>

                </main>
            </div>
        </div>
    </div>