<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Data Master Gerbang</title>

    <?php 
        include("../tampilan/header.php");
    ?>

</head>
<body>
    <?php 
        include("../tampilan/sidebar.php");
    ?>
    <div class="main-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <section class="section">
                    <div class="section-header">
                        <h4 class="panel-title fw-bold font-timesnew">Data Master Gerbang</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item active">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item active">
                                <a href="data-gerbang.php" class="text-decoration-none text-primary">Data Master Gerbang</a></div>
                        </div>
                    </div>
                        <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "tambah"){
                                    ?>
                                    <div class="alert alert-success font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Selamat anda sudah menambahkan data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-gerbang.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "edit"){
                                    ?>
                                    <div class="alert alert-info font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah mengedit data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-gerbang.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "hapus"){
                                    ?>
                                    <div class="alert alert-danger font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah menghapus data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-gerbang.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "gagal"){
                                    ?>
                                    <div class="alert alert-warning font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data baru.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-gerbang.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                </section>
                <div class="row">
                    <div class="card" style="min-width:1333.5px;">
                        <div class="card-header-form">
                            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">
                                <i class="fas fa-plus"></i>
                                <span class="mx-3 font-weight-600">Tambah Data Gerbang</span>
                            </button>
                            <button class="btn btn-warning btn-lg" onclick="javascript:window.location.href='data-gerbang.php'">
                                <i class="glyphicon glyphicon-refresh"></i>
                                <span class="mx-3 font-weight-600">Refresh</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Gerbang</th>
                                            <th>Nama Gerbang</th>
                                            <th>Lokasi Gerbang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $row = $lihat -> gerbang();
                                            $no = 1;
                                            foreach ($row as $isi) {
                                                ?>
                                                <tr>
                                                    <td><?=$no;?></td>
                                                    <td><?=$isi['kode_gerbang']?></td>
                                                    <td><?=$isi['nama_gerbang']?></td>
                                                    <td><?=$isi['lokasi_gerbang']?></td>
                                                    <td>
                                                        <a href="edit.php?id=<?=$isi['id_gerbang']?>" onclick="javascript:return confirm('Apakah anda ingin edit data ini ?')" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="act-hapus.php?id=<?=$isi['id_gerbang']?>" onclick="javascript:return confirm('Apakah anda ingin menghapus data ini ?')" class="btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $no++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="myModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background:skyblue;color:#fff;">
                                    <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Gerbang</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="act-tambah.php" method="post">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td>Kode Gerbang </td>
                                                <td><input type="text" name="kode" class="form-control">
                                                <small class="text-muted">Masukkan kode Ruas</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Gerbang </td>
                                                <td><input type="text" name="gerbang" class="form-control">
                                                <small class="text-muted">Masukkan Nama gerbang</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi Gerbang </td>
                                                <td><input type="text" name="lokasi" class="form-control">
                                                <small class="text-muted">Masukkan Lokasi gerbang</small>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                                <i class="fas fa-save"></i>
                                                <span class="mx-3 font-weight-600">Simpan Data</span>
                                            </button>
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
    <?php 
        include("../tampilan/footer.php");
    ?>