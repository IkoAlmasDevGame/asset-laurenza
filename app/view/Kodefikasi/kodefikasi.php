<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Data Master Kodefikasi</title>
    
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
                        <h4 class="panel-title fw-bold font-timesnew">Data Master Kodefikasi</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="kodefikasi.php" class="text-decoration-none text-primary">Kodefikasi</a></div>
                        </div>
                    </div>
                        <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "tambah"){
                                    ?>
                                    <div class="alert alert-success font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Selamat anda sudah menambahkan data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kodefikasi.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "edit"){
                                    ?>
                                    <div class="alert alert-info font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah mengedit data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kodefikasi.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "hapus"){
                                    ?>
                                    <div class="alert alert-danger font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah menghapus data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kodefikasi.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "gagal"){
                                    ?>
                                    <div class="alert alert-warning font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data ruas baru.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kodefikasi.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                </section>
                <div class="row">
                    <div class="card">
                        <div class="card-header-form">
                            <button class="btn btn-warning btn-lg" onclick="javascript:window.location.href='kodefikasi.php'">
                                <i class="glyphicon glyphicon-refresh"></i>
                                <span class="mx-3 font-weight-600">Refresh</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripe table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Kategori</th>
                                            <th>Kode Subkategori</th>
                                            <th>Kode Ruas</th>
                                            <th>Kode Gerbang</th>
                                            <th>Tahun</th>
                                            <th>Nomer Seri Aset</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $row = $lihat -> kodefikasi();
                                            $no = 1;
                                            foreach ($row as $isi) {
                                                ?>
                                                <tr>
                                                    <td><?=$no;?></td>
                                                    <td><?=$isi['kode_kategori']?></td>
                                                    <td><?=$isi['kode_subkategori']?></td>
                                                    <td><?=$isi['kode_ruas']?></td>
                                                    <td><?=$isi['kode_gerbang']?></td>
                                                    <td><?=$isi['tahun_input']?></td>
                                                    <td><?=$isi['nomer_seri_aset']; ?></td>
                                                    <td>
                                                        <a style="cursor:pointer;" data-bs-target="#myTarget<?=$isi['id_kodefikasi']?>" data-bs-toggle="modal" onclick="javascript:return confirm('Apakah anda ingin review data ini ?')" class="btn btn-info btn-sm">Detail</a>
                                                    </td>
                                                </tr>
                                                <div class="modal" id="myTarget<?=$isi['id_kodefikasi']?>" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background:skyblue;color:#fff;">
                                                                <h5 class="modal-title"><i class="fa fa-eye"></i> Review Data Kodefikasi</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="table-responsive">
                                                                    <p class="font-weight-normal" style="font-size: 17px; font-family:monospace;">Kategori : <?=$isi['kode_kategori']." - ".$isi['nama_kategori']?></p>
                                                                    <p class="font-weight-normal" style="font-size: 17px; font-family:monospace;">Sub Kategori : <?=$isi['kode_subkategori']." - ".$isi['nama_subkategori']?></p>
                                                                    <p class="font-weight-normal" style="font-size: 17px; font-family:monospace;">Ruas : <?=$isi['kode_ruas']." - ".$isi['nama_ruas']?></p>
                                                                    <p class="font-weight-normal" style="font-size: 17px; font-family:monospace;">Gerbang : <?=$isi['kode_gerbang']." - ".$isi['nama_gerbang']?></p>
                                                                    <p class="font-weight-normal" style="font-size: 17px; font-family:monospace;">Tahun Penerimaan : <?=$isi['tahun_input']?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                $no++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
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