<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Data Master Inventori</title>

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
                        <h4 class="panel-title font-timesnew">Data Master Inventori</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="inventori.php" class="text-decoration-none text-primary">Inventori</a></div>
                        </div>
                    </div>
                        <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "tambah"){
                                    ?>
                                    <div class="alert alert-success font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Selamat anda sudah menambahkan data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-inventori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "edit"){
                                    ?>
                                    <div class="alert alert-info font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah mengedit data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-inventori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "hapus"){
                                    ?>
                                    <div class="alert alert-danger font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah menghapus data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-inventori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "gagal"){
                                    ?>
                                    <div class="alert alert-warning font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data ruas baru.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-inventori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                </section>
                <div class="row">
                    <div class="card">
                        <div class="card-header-form">
                            <button class="btn btn-warning btn-lg" onclick="javascript:window.location.href='inventori.php'">
                                <i class="glyphicon glyphicon-refresh"></i>
                                <span class="mx-3 font-weight-600">Refresh</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 12px;">Kodefikasi</th>
                                            <th style="font-size: 12px;">Merk Aset</th>
                                            <th style="font-size: 12px;">Tahun Aset</th>
                                            <th style="font-size: 12px;">Harga</th>
                                            <th style="font-size: 12px;">Akumulasi Penyusutan</th>
                                            <th style="font-size: 12px;">Waktu Penyusutan</th>
                                            <th style="font-size: 12px;">Kondisi Aset</th>
                                            <th style="font-size: 12px;">Lokasi Aset</th>
                                            <th style="font-size: 12px;">Image</th>
                                            <th style="font-size: 12px;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $row = $lihat->inventori();
                                            foreach ($row as $isi) {
                                                ?>
                                                <tr>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><?=$isi['nomer_seri_aset']?></td>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><?=$isi['merk_aset']?></td>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><?=$isi['tahun_input']?></td>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><?=number_format($isi['harga_perolehan'])?></td>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><?=$isi['masa_penyusutan_aset']." tahun";?></td>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><?=$isi['waktu_penyusutan_aset']." tahun";?></td>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><?=$isi['kondisi_aset']?></td>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><a href="<?=$isi['lokasi_aset']?>" class="nav-link"><?=$isi['lokasi_aset']?></a></td>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><a style="cursor: pointer;" data-bs-target="#myModel<?=$isi['id_inventori']?>" data-bs-toggle="modal" class="btn btn-sm btn-primary">foto</a></td>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><?=$isi['status']?></td>
                                                </tr>
                                                <div class="modal" id="myModel<?=$isi['id_inventori']?>" aria-hidden="true" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"><i class="fa fa-image"></i> Data Foto</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="img-responsive">
                                                                        <img src="../../../assets/image/inventori/<?=$isi['foto_aset']?>" alt="foto_aset" class="img-thumbnail">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
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