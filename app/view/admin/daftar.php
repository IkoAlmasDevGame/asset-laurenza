<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Daftar Account</title>

    <?php 
        include("../tampilan/header.php");
    ?>
    <style>
        #fontSize {
            font-size: 16px;
            font-weight: 600;
            font-family: monospace;
        }
    </style>
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
</head>
<body>
    <?php 
        include("../tampilan/sidebar.php");
    ?>
    <div class="main-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php 
                    if(isset($_GET['page'])){
                        if($_GET['page'] == "divisi"){
                            ?>
                            <section class="section">
                                <div class="section-header">
                                    <h4 class="panel-title">DAFTAR ACCOUNT DIVISI</h4>
                                    <div class="section-header-breadcrumb">
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="daftar.php?page=divisi" class="text-decoration-none text-primary">Daftar Divisi</a></div>
                                    </div>
                                </div>
                            </section>
                            <div class="row">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-bold text-black">DAFTAR ACCOUNT DIVISI</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <form action="act-signup.php" method="post">
                                                <table class="table table-striped table-bordered">
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">E-mailing :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan E-mailing baru</small>
                                                            <input type="email" name="userEmail" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Username :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan username anda</small>
                                                            <input type="text" name="username" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Password :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan password baru anda</small>
                                                            <input type="password" name="password" id="pass" class="form-control">
                                                            <input type="checkbox" onclick="shw()"> lihat password
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Jabatan :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                        <select name="user_level" class="form-control">
                                                            <option>Pilih jabatan anda</option>
                                                            <option value="Administrator">Administrator</option>
                                                            <option value="Manager">Manager Divisi</option>
                                                            <option value="Vice President">Vice President Divsi</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Bagian :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <select name="bagian" class="form-control">
                                                                <option>Pilih Bagian</option>
                                                                <option value="divisi">Divisi</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Operasional :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <select name="operasional" class="form-control">
                                                                <option>Pilih Operasional</option>
                                                                <option value="IT">IT</option>
                                                                <option value="operasi dan pemeliharaan jalan tol">Operasi Dan Pemeliharaan Jalan Tol</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Telephone :</td>
                                                        <td>
                                                            <small>masukkan number telepone</small>
                                                            <input type="text" class="form-control" name="telpone">
                                                        </td>
                                                    </tr>                      
                                                </table>
                                                <div class="modal-footer">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                                        <i class="fas fa-save mx-3"></i>Simpan Data
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        if($_GET['page'] == "cabang"){
                            ?>
                            <section class="section">
                                <div class="section-header">
                                <h4 class="panel-title">DAFTAR ACCOUNT CABANG</h4>
                                    <div class="section-header-breadcrumb">
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="daftar.php?page=cabang" class="text-decoration-none text-primary">Daftar Cabang</a></div>
                                    </div>
                                </div>
                            </section>
                            <div class="row">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-bold text-black">DAFTAR ACCOUNT CABANG</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <form action="act-signup.php" method="post">
                                                <table class="table table-striped table-bordered">
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">E-mailing :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan E-mailing baru</small>
                                                            <input type="email" name="userEmail" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Username :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan username anda</small>
                                                            <input type="text" name="username" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Password :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan password baru anda</small>
                                                            <input type="password" name="password" id="pass" class="form-control">
                                                            <input type="checkbox" onclick="shw()"> lihat password
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Jabatan :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <select name="user_level" class="form-control">
                                                                <option value="<?=E_ERROR;?>">Pilih jabatan anda</option>
                                                                <option value="Staff">Staff</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Bagian :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <select name="bagian" class="form-control">
                                                                <option>Pilih Bagian</option>
                                                                <option value="Cabang">Cabang</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Cabang :</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <select name="cabang" class="form-control">
                                                                <option value="">Pilih Cabang</option>
                                                                <option value="bakter">bakauheni – Terbanggi besar</option>
                                                                <option value="Terpeka">Terbanggi Besar - Pematang Panggang - Kayu
                                                                    Agung</option>
                                                                <option value="Palindra">Palembang - Indralaya</option>
                                                                <option value="Permai">Pekanbaru - Dumai</option>
                                                                <option value="Pekanbaru - Padang Seksi Pekanbaru - Bangkinang">
                                                                    Pekanbaru - Padang Seksi Pekanbaru – Bangkinang </option>
                                                                <option value="Mebi">Medan - Binjai</option>
                                                                <option value="Binjai - Stabat">Binjai - Langsa Seksi 1</option>
                                                                <option value="Sibanceh">Sigli - Banda Aceh</option>
                                                                <option value="JORR-S">Jakarta Outer Ring Road Seksi S </option>
                                                                <option value="ATP">Tanjung Priok</option>
                                                                <option value="Bengkulu - Taba Penanjung">Bengkulu - Taba Penanjung
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Telephone :</td>
                                                        <td>
                                                            <small>masukkan number telepone</small>
                                                            <input type="text" class="form-control" name="telpone">
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class="modal-footer">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                                        <i class="fas fa-save mx-3"></i>Simpan Data
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }else{
                        ?>
                            <h4 class='text-center font-weight-600 fw-light text-danger' style='font-size: 18px;'>Error Page</h4>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <?php 
        include("../tampilan/footer.php");
    ?>