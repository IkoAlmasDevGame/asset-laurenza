<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <?php 
        include("../../config/config.php");
    ?>

    <title>Sign In Hutama Karya</title>
    <link rel="shortcut icon" href="<?=base('assets/icon/Hutama_karya.png')?>" type="image/x-icon">

    <!-- link css -->
    <link rel="stylesheet" href="<?=base("dist/css/all.min.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/bootstrapv5223.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/carousel.css")?>">
    <!-- <link rel="stylesheet" href="<?=base("dist/css/bootstrap.min.css")?>"> -->
    <link rel="stylesheet" href="<?=base("dist/css/card.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/col-bootstrap.css")?>">
    <link rel="stylesheet" href="<?=base("dist/css/glyphicon.css")?>">
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Georgia, sans-serif, 'Times New Roman';
    }

    html,
    body {
        width: 100%;
        height: 100%;

        background-image: url('../../../assets/image/photo3.jpg');
        background-size: cover;
    }

    .wrapper {
        border: 1px solid;
        border-radius: 5%;
        border-color: thistle;
    }

    .text-underline {
        text-decoration: none;
    }

    .text-underline:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="app">
        <div class="layout">
            <div class="layoutAuthentication">
                <main role="alert">
                    <?php 
                        if(isset($_GET['pesan'])){
                            if($_GET['pesan'] == "gagal"){
                                ?>
                    <div class="alert alert-info" role="alert">
                        <strong>perhatian !</strong>Maaf anda gagal tidak ada level member pada account anda
                        <button type="button" data-bs-dismiss="alert" 
                        onclick="javascript:location.href='signin.php'" aria-hidden="true">&times;</button>
                    </div>
                    <?php
                            }
                            if($_GET['pesan'] == "belummasuk"){
                                ?>
                    <div class="alert alert-warning" role="alert">
                        <strong>perhatian !</strong>Maaf anda tidak dapat masuk ke dalam dashboard utama
                        <button type="button" data-bs-dismiss="alert" 
                        onclick="javascript:location.href='signin.php'" aria-hidden="true">&times;</button>
                    </div>
                    <?php
                            }
                            if($_GET['pesan'] == "kosong"){
                                ?>
                    <div class="alert alert-warning" role="alert">
                        <strong>perhatian !</strong>Maaf anda harus mengisi form input user email dan password karena
                        tidak boleh ada yang kosong.
                        <button type="button" data-bs-dismiss="alert" 
                        onclick="javascript:location.href='signin.php'" aria-hidden="true">&times;</button>
                    </div>
                    <?php
                            }
                        }
                    ?>
                </main>
                <main>
                    <div class="">
                        <div class="col-xl-12" style="padding-top:180px; padding-bottom:0; padding-left:0;
                        padding-right:0;">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="panel panel-default" style="border-radius: 5%;">
                                    <div class="panel-body wrapper bg-dark opacity-75">
                                    <label class="font-weight-600 mx-auto text-white">Login PT Hutama Karya</label>
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="mx-auto" style="font-size: 20px; font-weight:600; color:black;">Login</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <form action="../../action/act-signin.php" method="post">
                                                        <fieldset class="form-group row align-items-center pt-1">
                                                            <label class="col-lg-1 ms-3 me-3 text-center align-items-center">
                                                                <i class="fa fa-envelope mt-2" style="font-size: 20px;"></i>
                                                            </label>
                                                            <div class="col-lg-10 col-md-2 align-items-center">
                                                                <small>masukkan email anda / username</small>
                                                                <input type="text" name="userEmail" class="form-control" require>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="form-group row align-items-center pt-1">
                                                            <label class="col-lg-1 ms-3 me-3 text-center align-items-center">
                                                                <i class="fa fa-lock mt-2" style="font-size: 20px;"></i>
                                                            </label>
                                                            <div class="col-lg-10 col-md-2 align-items-center">
                                                                <small>masukkan password anda</small>
                                                                <input type="password" name="password" id="pass" class="form-control" require>
                                                                <input type="checkbox" onclick="shw()"> show password
                                                            </div>
                                                        </fieldset>
                                                        <div class="mb-3">
                                                            <div class="d-flex justify-content-center align-items-center mt-2">
                                                                <button type="reset" style="border: 1px solid black;" class="btn btn-danger mx-2"><i class="fas fa-eraser"></i></button>
                                                                <button type="submit" style="border: 1px solid black;" class="btn btn-primary" name="submit"><i class="fas fa-sign-in-alt">
                                                                    </i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="footer container">
                        <section class="col-sm-12" style="padding-top: 120px;">
                            <div class="col-lg-10 col-lg-offset-1 text-center">
                                <br>
                                <ul class="list-inline">
                                    <li>
                                        <a href="https://www.hutamakarya.com/operasi-dan-pemeliharaan-jalan-tol" class="active fw-medium font-timesnew" target="_blank" style="font-size: 14px;">
                                            https://www.hutamakarya.com/operasi-dan-pemeliharaan-jalan-tol
                                        </a>
                                    </li>
                                </ul>
                                <p class="text-black" style="font-size: 16px;">Copyright &copy;<script>
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
    <script lang="javascript">
        function shw(){
            var pass = document.getElementById('pass').type;
            if(pass == "password"){
                document.getElementById('pass').type = "text";
            }else{
                document.getElementById('pass').type = "password";
            }
        }
    </script>
</body>

</html>