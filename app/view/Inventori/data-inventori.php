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
        <div class="panel panel-default" style="min-width:1400px;">
            <div class="panel-body">
                <section class="section">
                    <div class="section-header">
                        <h4 class="panel-title font-timesnew">Data Master Inventori</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="data-inventori.php" class="text-decoration-none text-primary">Inventori</a></div>
                        </div>
                    </div>
                        <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "tambah"){
                                    ?>
                                    <div class="alert alert-success font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Selamat anda sudah menambahkan data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-inventori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "edit"){
                                    ?>
                                    <div class="alert alert-info font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah mengedit data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-inventori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "hapus"){
                                    ?>
                                    <div class="alert alert-danger font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah menghapus data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-inventori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "gagal"){
                                    ?>
                                    <div class="alert alert-warning font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data baru.
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
                            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">
                                <i class="fas fa-plus"></i>
                                <span class="mx-3 font-weight-600">Tambah Data Kodefikasi</span>
                            </button>
                            <button class="btn btn-warning btn-lg" onclick="javascript:window.location.href='data-inventori.php'">
                                <i class="glyphicon glyphicon-refresh"></i>
                                <span class="mx-3 font-weight-600">Refresh</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div style="min-width:1334.5px;">
                                <table class="table table-striped table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 12px">Kodefikasi</th>
                                            <th style="font-size: 12px">Merk Aset</th>
                                            <th style="font-size: 12px">Tahun Aset</th>
                                            <th style="font-size: 12px">Harga</th>
                                            <th style="font-size: 12px">Akumulasi Penyusutan</th>
                                            <th style="font-size: 12px">Waktu Penyusutan</th>
                                            <th style="font-size: 12px">Kondisi Aset</th>
                                            <th style="font-size: 12px">Lokasi Aset</th>
                                            <th style="font-size: 12px">Image</th>
                                            <th style="font-size: 12px">Status</th>
                                            <th style="font-size: 12px">Aksi</th>
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
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><a href="#myModel<?=$isi['id_inventori']?>" data-bs-toggle="modal" class="btn btn-sm btn-primary">foto</a></td>
                                                    <td style="font-size: 11px; font-family:monospace; font-style:normal;"><?=$isi['status']?></td>
                                                    <td>
                                                        <a href="edit.php?id=<?=$isi['id_inventori']?>" class="btn btn-sm btn-info" onclick="javascript:return confirm('Apakah anda ingin mengedit data ini ?')"><i class="fas fa-edit"></i></a>
                                                        <a href="act-hapus.php?id=<?=$isi['id_inventori']?>" class="btn btn-sm btn-danger" onclick="javascript:return window.confirm('Apakah anda ingin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                                                    </td>
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
                    <div class="modal" id="myModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Inventori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="act-tambah.php" method="post" enctype="multipart/form-data">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td>Kodefikasi</td>
                                                <td>
                                                    <select name="nomer_seri_aset" class="form-control">
                                                        <option value="#">Pilih Kodefikasi</option>
                                                        <?php 
                                                            $row = $lihat -> kodefikasi();
                                                            foreach ($row as $isi) {
                                                                ?>
                                                                <option value="<?=$isi['nomer_seri_aset']?>"><?=$isi['nomer_seri_aset']?></option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Merk Aset</td>
                                                <td><input type="text" name="merk_aset" class="form-control" require placeholder="Masukkan nama merk aset"></td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Aset</td>
                                                <td>
                                                    <select name="tahun_input" class="form-control">
                                                        <option selected="selected">Pilih Tahun Aset</option>
                                                        <?php 
                                                            $now = date('Y');
                                                            for ($a = 2000; $a <= $now; $a++){
                                                                ?>
                                                                <option value="<?=$a;?>"><?=$a;?></option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Harga Perolehan</td>
                                                <td><input type="number" name="harga_perolehan" class="form-control" require placeholder="Masukkan Harga Perolehan"></td>
                                            </tr>
                                            <tr>
                                                <td>Masa Penyusutan</td>
                                                <td><input type="text" name="masa_penyusutan_aset" class="form-control" require placeholder="Masukkan Akumulasi Penyusutan"></td>
                                            </tr>
                                            <tr>
                                                <td>Waktu Penyusutan</td>
                                                <td><input type="text" name="waktu_penyusutan_aset" class="form-control" require placeholder="Masukkan Waktu Penyusutan"></td>
                                            </tr>
                                            <tr>
                                                <td>Kondisi Aset</td>
                                                <td>
                                                    <select name="kondisi_aset" class="form-control">
                                                        <option value="#">Pilih Kondisi Aset</option>
                                                        <option value="sangat bagus">Sangat Bagus</option>
                                                        <option value="bagus">Bagus</option>
                                                        <option value="rusak">Rusak</option>
                                                        <option value="sangat rusak">Sangat Rusak</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi Aset</td>
                                                <td><input type="text" name="lokasi_aset" class="form-control" require></td>
                                            </tr>
                                            <tr>
                                                <td>Uploud Foto</td>
                                                <td><input type="file" name="foto_aset" class="form-control" require></td>
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