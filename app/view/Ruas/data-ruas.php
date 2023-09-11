<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Database Master Ruas</title>

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
                        <h4 class="panel-title fw-bold">Data Master Ruas</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="data-ruas.php" class="text-decoration-none text-primary">Data Master Ruas</a></div>
                        </div>
                    </div>
                        <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "tambah"){
                                    ?>
                                    <div class="alert alert-success font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Selamat anda sudah menambahkan data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:location.href='data-ruas.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "edit"){
                                    ?>
                                    <div class="alert alert-info font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah mengedit data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:location.href='data-ruas.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "hapus"){
                                    ?>
                                    <div class="alert alert-danger font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah menghapus data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:location.href='data-ruas.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "gagal"){
                                    ?>
                                    <div class="alert alert-warning font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data baru.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:location.href='data-ruas.php'" aria-hidden="true">&times;</button>
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
                                <span class="mx-3 font-weight-600">Tambah Data Ruas</span>
                            </button>
                            <button class="btn btn-warning btn-lg" onclick="javascript:location.href='data-ruas.php'">
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
                                            <th>Kode Ruas</th>
                                            <th>Nama Ruas</th>
                                            <th>panjang Ruas</th>
                                            <th>lokasi Ruas</th>
                                            <th>jumlah Gerbang Tol</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $row = $lihat -> ruas();
                                            $no = 1;
                                            foreach ($row as $isi) {
                                                ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $isi['kode_ruas'] ?></td>
                                                    <td><?= $isi['nama_ruas'] ?></td>
                                                    <td><?= number_format($isi['panjang_ruas'])." m"; ?></td>
                                                    <td><?= $isi['lokasi_ruas'] ?></td>
                                                    <td><?= number_format($isi['jumlah_ruas']); ?></td>
                                                    <td>
                                                        <a href="edit.php?id=<?=$isi['id_ruas']?>" onclick="javascript:return confirm('Apakah anda ingin edit data ini ?')" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="act-hapus.php?id=<?=$isi['id_ruas']?>" onclick="javascript:return confirm('Apakah anda ingin menghapus data ini ?')" class="btn btn-danger btn-sm">Hapus</a>
                                                        <a href="detail.php?id=<?=$isi['id_ruas']?>" onclick="javascript:return confirm('Apakah anda ingin review data ini ?')" class="btn btn-info btn-sm">Detail</a>
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
                    <div id="myModal" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background:skyblue;color:#fff;">
                                    <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Ruas</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="act-tambah.php" method="post">
                                    <div class="modal-body">
                                        <table class="table table-striped bordered">
                                            <tr>
                                                <td>Kode Ruas </td>
                                                <td><input type="text" name="kode_ruas" class="form-control">
                                                <small class="text-muted">Masukkan kode Ruas</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Ruas </td>
                                                <td><input type="text" name="nama_ruas" class="form-control">
                                                <small class="text-muted">Masukkan Nama Ruas</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Panjang Ruas </td>
                                                <td><input type="number" name="panjang_ruas" class="form-control">
                                                <small class="text-muted">Masukkan Panjang Ruas</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi Ruas </td>
                                                <td><input type="text" name="lokasi_ruas" class="form-control">
                                                <small class="text-muted">Masukkan Lokasi Ruas</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Gerbang Tol</td>
                                                <td><input type="number" name="jumlah_ruas" class="form-control">
                                                <small class="text-muted">Masukkan jumlah Gerbang Tol</small>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
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
    <?php 
        include("../tampilan/footer.php");
    ?>