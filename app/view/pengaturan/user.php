<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <?php 
        global $kon;
        include("../tampilan/header.php");

        $id = $_GET['id'];
        $user_level = $_GET['user_level'];

        $sql = "select * from user_cabang where id_user_cabang='$id' and user_level='$user_level'";
        $row = $kon->query($sql);
        $hasil = $row->fetch_assoc();
    ?>    

    <title>Edit Profile</title>

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
                    if(isset($_GET['user_level'])){
                        if($_GET['user_level'] == "Administrator" || $_GET['user_level'] == "Manager" || $_GET['user_level'] == "Vice President"){
                            ?>
                            <section class="section">
                                <div class="section-header">
                                    <div class="section-header-breadcrumb">
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="user.php?id=<?=$id;?>&user_level=<?=$_SESSION['user_level']?>" class="text-decoration-none text-primary">Edit Profile</a></div>
                                    </div>
                                </div>
                            </section>
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="../../action/act-edit.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?=$hasil['id_user_cabang']?>">
                                            <div class="table-responsive" style="padding-top: 50px;">
                                                <div class="img-responsive">
                                                    <img src="../../../assets/image/<?=$_SESSION['foto']?>" class="img-thumbnail" alt="profile" width="64" style="border-radius: 10px; border:1px solid; border-color:blue; top:0; bottom:0; right:20px; position:absolute;" title="<?php echo $_SESSION['username']?>">
                                                </div>
                                                <table class="table table-striped table-bordered">
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">E-mailing</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan E-mailing baru</small>
                                                            <input type="email" name="userEmail" value="<?=$hasil['userEmail']?>" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Username</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan username anda</small>
                                                            <input type="text" name="username" value="<?=$hasil['username']?>" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Password</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan password baru anda</small>
                                                            <input type="password" name="password" id="pass" value="<?=$hasil['password']?>" class="form-control">
                                                            <input type="checkbox" onclick="shw()"> lihat password
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Jabatan</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                        <select name="user_level" class="form-control">
                                                            <option><?=$hasil['user_level'] ?></option>
                                                            <option value="Administrator">Administrator</option>
                                                            <option value="Manager">Manager Divisi</option>
                                                            <option value="Vice President">Vice President Divsi</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Bagian</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <select name="bagian" class="form-control">
                                                                <option><?=$hasil['bagian'] ?></option>
                                                                <option value="divisi">Divisi</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Operasional</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <select name="operasional" class="form-control">
                                                                <option><?=$hasil['operasional'] ?></option>
                                                                <option value="IT">IT</option>
                                                                <option value="operasi dan pemeliharaan jalan tol">Operasi Dan Pemeliharaan Jalan Tol</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Telephone :</td>
                                                        <td>
                                                            <small>masukkan number telepone</small>
                                                            <input type="text" class="form-control" value="<?=$hasil['telpone']?>" name="telpone">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Uploud Foto</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <input type="file" name="foto" value="<?=$hasil['foto']?>" class="form-control" style="float: right;" require>
                                                        </td>
                                                    </tr>                  
                                                </table>
                                                <div class="modal-footer">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                                        <i class="fas fa-save mx-3"></i>Edit Data
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        if($_GET['user_level'] == "Staff"){
                            ?>
                            <section class="section">
                                <div class="section-header">
                                    <div class="section-header-breadcrumb">
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="user.php?id=<?=$id;?>&user_level=<?=$_SESSION['user_level']?>" class="text-decoration-none text-primary">Edit Profile</a></div>
                                    </div>
                                </div>
                            </section>
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="../../action/act-edit.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?=$hasil['id_user_cabang']?>">
                                            <div class="table-responsive" style="padding-top: 50px;">
                                                <div class="img-responsive">
                                                    <img src="../../../assets/image/<?=$_SESSION['foto']?>" class="img-thumbnail" alt="profile" width="64" style="border-radius: 10px; border:1px solid; border-color:blue; top:0; bottom:0; right:20px; position:absolute;" title="<?php echo $_SESSION['username']?>">
                                                </div>
                                                <table class="table table-striped table-bordered">
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">E-mailing </td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan E-mailing baru</small>
                                                            <input type="email" name="userEmail" value="<?=$hasil['userEmail']?>" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Username </td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan username anda</small>
                                                            <input type="text" name="username" value="<?=$hasil['username']?>" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Password </td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <small>Ketikan password baru anda</small>
                                                            <input type="password" name="password" value="<?=$hasil['password']?>" id="pass" class="form-control">
                                                            <input type="checkbox" onclick="shw()"> lihat password
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Jabatan </td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <select name="user_level" class="form-control">
                                                                <option><?php echo $hasil['user_level'] ?></option>
                                                                <option value="Staff">Staff</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Bagian </td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <select name="bagian" class="form-control">
                                                                <option><?php echo $hasil['bagian'] ?></option>
                                                                <option value="Cabang">Cabang</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Cabang </td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <select name="cabang" class="form-control">
                                                                <option><?php echo $hasil['cabang'] ?></option>
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
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Telephone </td>
                                                        <td>
                                                            <small>masukkan number telepone</small>
                                                            <input type="text" class="form-control" value="<?=$hasil['telpone']?>" name="telpone">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-lg-4 text-md-start align-items-center" id="fontSize">Uploud Foto</td>
                                                        <td class="col-lg-8 col-md-4 align-items-center">
                                                            <input type="file" name="foto" value="<?=$hasil['foto']?>" class="form-control" style="float: right;" require>
                                                        </td>
                                                    </tr> 
                                                </table>
                                                <div class="modal-footer">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                                        <i class="fas fa-save mx-3"></i>Edit Data
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
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