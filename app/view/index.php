<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Dashboard Inventori Remake</title>
    <?php 
        include("../config/config.php");
    ?>
    <link rel="shortcut icon" href="<?=base('assets/icon/Hutama_karya.png')?>" type="image/x-icon">

    <!-- link css -->    
    <link rel="stylesheet" href="<?=base("dist/css/all.min.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/bootstrapv5223.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/carousel.css")?>">
    <!-- <link rel="stylesheet" href="<?=base("dist/css/bootstrap.min.css")?>"> -->
    <link rel="stylesheet" href="<?=base("dist/css/card.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/col-bootstrap.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/glyphicon.css")?>">
</head>
<body>
    <div class="app">
        <div class="layout">
            <div class="layoutAuthentication">
                <main>
                    <header>
                        <nav class="navbar navbar-default navbar-expand-lg sticky-top">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                        data-bs-target="#bs-example-navbar-collapse">
                                        <span class="sr-only"></span> Menu <i class="fa fa-bars"></i>
                                    </button>
                                </div>

                                <a href="index.php" class="text-decoration-none navbar-brand">
                                    <img src="<?=base('assets/icon/Hutama_karya.png')?>" alt="Logo"
                                        style="width: 32px; margin-top:-1rem; font-size:16px;" class="nav-pills mx-3">PT Hutama Karya
                                </a>

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="navbar-item">
                                            <a href="index.php" class="nav-link m-2 menu-item nav-active"
                                                style="font-size: 15px;">Beranda</a>
                                        </li>
                                        <li class="navbar-item">
                                            <a href="#tentang" class="nav-link m-2 menu-item nav-active"
                                                style="font-size: 15px;">Tentang</a>
                                        </li>
                                        <li class="navbar-item">
                                            <a href="tampilan/signin.php" class="nav-link m-2 menu-item nav-active"
                                                style="font-size: 15px;">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </header>

                    <!-- Slide Carousel -->
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- <div class="carousel-item active">
                                <img src="../../assets/image/logistic1.jpg" alt="Logistic 1" class="w-100 h-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../../assets/image/logistic2.jpg" alt="Logistic 2" class="w-100 h-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../../assets/image/logistic3.jpg" alt="Logistic 3" class="w-100 h-100">
                            </div> -->
                            <div class="carousel-item active">
                                <img src="../../assets/image/photo1.jpeg.jpg" alt="Jalan Tol 1" class="w-100 h-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../../assets/image/photo2.webp" alt="Jalan Tol 2" class="w-100 h-100">
                            </div>
                            <div class="carousel-item">
                                <img src="../../assets/image/photo3.jpg" alt="Jalan Tol 3" class="w-100 h-100">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <section id="tentang" style="padding:50px; height:100vh;">
                        <div class="row">
                            <div class="col-lg-12 text-danger text-center">
                                <div class="col-lg-11">
                                    <div class="jumbotron">
                                        <h1> Website Sistem Informasi </h1><br>
                                        <p>Inventarisasi Aset dibuat oleh divisi Operasi dan Pemeliharaan Jalan Tol PT HUTAMA KARYA. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <footer class="footer container">
                        <section class="col-sm-12" style="margin-top: 50px;">
                            <div class="col-lg-10 col-lg-offset-1 text-center">
                                <br>
                                <ul class="list-inline">
                                    <li>
                                        <a href="https://www.hutamakarya.com/operasi-dan-pemeliharaan-jalan-tol" target="_blank">
                                            https://www.hutamakarya.com/operasi-dan-pemeliharaan-jalan-tol
                                        </a>
                                    </li>

                                </ul>
                                <p class="text-muted" style="font-size: 16px;">Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                </div>
                                <a href="" style="position: fixed; bottom:0; right:0; z-index: 1000;">
                                    <i class="fab fa-whatsapp" style="font-size:42px; color:green; margin-right:52px; margin-bottom:32px;"></i>
                                </a>
                        </section>
                    </footer>
                </main>
            </div>
        </div>
    </div>
    <script src="<?=base("dist/modules/all.min.js")?>" lang="javascript"></script>
    <script src="<?=base("dist/modules/bootstrap.bundle.js")?>" lang="javascript"></script>
    <script src="<?=base("bootstrap.min.js")?>" lang="javascript"></script>
</body>
</html>