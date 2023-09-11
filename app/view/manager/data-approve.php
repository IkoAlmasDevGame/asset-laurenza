<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <?php 
        include("../tampilan/header.php");
    ?>    
    
    <title>Data Master Approve</title>
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
                        if($_GET['page'] == "approve"){
                        ?>
                            <section class="section">
                                <div class="section-header">
                                    <h4 class="panel-title font-timesnew">Data Master Approve</h4>
                                    <div class="section-header-breadcrumb">
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">
                                                Halaman utama </a></div>
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="data-approve.php?page=approve" class="text-decoration-none text-primary">
                                                Data Master Approve </a></div>
                                    </div>
                                </div>
                                <?php 
                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan'] == "tambah"){
                                            ?>
                                            <div class="alert alert-success font-timesnew text-black" role="alert">
                                                <strong class="text-black fw-bold font-timesnew">Success </strong>Selamat anda sudah menambahkan data approve.
                                                <button type="button" class="close" data-bs-dismiss="modal" 
                                                onclick="javascript:return location.href='data-approve.php?page=approve'" aria-hidden="true">&times;</button>
                                            </div>
                                            <?php
                                        }
                                        if($_GET['pesan'] == "edit"){
                                            ?>
                                            <div class="alert alert-info font-timesnew text-black" role="alert">
                                                <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah mengedit data approve.
                                                <button type="button" class="close" data-bs-dismiss="modal" 
                                                onclick="javascript:return location.href='data-approve.php?page=approve'" aria-hidden="true">&times;</button>
                                            </div>
                                            <?php
                                        }
                                        if($_GET['pesan'] == "hapus"){
                                            ?>
                                            <div class="alert alert-danger font-timesnew text-black" role="alert">
                                                <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah menghapus data approve.
                                                <button type="button" class="close" data-bs-dismiss="modal" 
                                                onclick="javascript:return location.href='data-approve.php?page=approve'" aria-hidden="true">&times;</button>
                                            </div>
                                            <?php
                                        }
                                        if($_GET['pesan'] == "gagal"){
                                            ?>
                                            <div class="alert alert-warning font-timesnew text-black" role="alert">
                                                <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data baru.
                                                <button type="button" class="close" data-bs-dismiss="modal" 
                                                onclick="javascript:return location.href='data-approve.php?page=approve'" aria-hidden="true">&times;</button>
                                            </div>
                                            <?php
                                        }
                                    }
                                ?>
                            </section>
                            <div class="row">
                                <div class="card" style="min-width:1334.5px;">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered" id="example1">
                                                <thead>
                                                    <tr>
                                                        <th>Kodefikasi</th>
                                                        <th>Description</th>
                                                        <th>Merk Aset</th>
                                                        <th>Status</th>
                                                        <th>Image</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $row = $lihat -> StatusApprove();
                                                        foreach ($row as $isi) {
                                                            ?>
                                                            <tr>
                                                                <td><?=$isi['nomer_seri_aset']?></td>
                                                                <td>
                                                                    <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#myModel<?=$isi['id_approve']?>"
                                                                     class="btn btn-lg btn-primary">Desc nomer seri aset</a>
                                                                </td>
                                                                <td><?=$isi['merk_aset']?></td>
                                                                <td>
                                                                    <form action="act-edit.php" method="post">
                                                                        <input type="hidden" name="id" value="<?=$isi['id_approve']?>">
                                                                        <select name="status" class="form-control" type="submit" onchange="this.form.submit()">
                                                                            <option selected="selected"><?=$isi['status']?></option>
                                                                            <option value="ditunda">Ditunda</option>
                                                                            <option value="diterima">Diterima</option>
                                                                        </select>
                                                                    </form>
                                                                </td>
                                                                <td>
                                                                    <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#myModal<?=$isi['id_inventori']?>"
                                                                     class="btn btn-lg btn-warning">Foto</a>
                                                                </td>
                                                                <td>
                                                                    <a href="act-hapus.php?id=<?=$isi['id_approve']?>" onclick="javascript:return confirm('')" class="btn btn-sm btn-danger">hapus</a>
                                                                </td>
                                                            </tr>
                                                            <div class="modal" id="myModel<?=$isi['id_approve']?>" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"><i class="fas fa-book"></i> Data Description</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p style="font-size: 18px; font-family:monospace; font-weight:normal;">
                                                                               Kode Kategori = <?=$isi['kode_kategori']?> : <?=$isi['nama_kategori']?>
                                                                            </p>
                                                                            <p style="font-size: 18px; font-family:monospace; font-weight:normal;">
                                                                               Kode Subkategori = <?=$isi['kode_subkategori']?> : <?=$isi['nama_subkategori']?>
                                                                            </p>
                                                                            <p style="font-size: 18px; font-family:monospace; font-weight:normal;">
                                                                               Kode Ruas = <?=$isi['kode_ruas']?> : <?=$isi['nama_ruas']?>
                                                                            </p>
                                                                            <p style="font-size: 18px; font-family:monospace; font-weight:normal;">
                                                                               Kode Gerbang = <?=$isi['kode_gerbang']?> : <?=$isi['nama_gerbang']?>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal" id="myModal<?=$isi['id_inventori']?>" tabindex="-1" aria-hidden="true">
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
                        <?php
                        }
                        if($_GET['page'] == "request"){
                        ?>
                            <section class="section">
                                <div class="section-header">
                                    <h4 class="panel-title font-timesnew">Data Master Status Approve</h4>
                                    <div class="section-header-breadcrumb">
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">
                                            Halaman utama </a></div>
                                        <div class="breadcrumb breadcrumb-item">
                                            <a href="data-approve.php?page=request" class="text-decoration-none text-primary">
                                            Data Master Status Approve </a></div>
                                    </div>
                                </div>
                                <?php 
                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan'] == "tambah"){
                                            ?>
                                            <div class="alert alert-success font-timesnew text-black" role="alert">
                                                <strong class="text-black fw-bold font-timesnew">Success </strong>Selamat anda sudah menambahkan data.
                                                <button type="button" class="close" data-bs-dismiss="modal" 
                                                onclick="javascript:return location.href='data-approve.php?page=request'" aria-hidden="true">&times;</button>
                                            </div>
                                            <?php
                                        }
                                        if($_GET['pesan'] == "edit"){
                                            ?>
                                            <div class="alert alert-info font-timesnew text-black" role="alert">
                                                <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah mengedit data.
                                                <button type="button" class="close" data-bs-dismiss="modal" 
                                                onclick="javascript:return location.href='data-approve.php?page=request'" aria-hidden="true">&times;</button>
                                            </div>
                                            <?php
                                        }
                                        if($_GET['pesan'] == "hapus"){
                                            ?>
                                            <div class="alert alert-danger font-timesnew text-black" role="alert">
                                                <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah menghapus data.
                                                <button type="button" class="close" data-bs-dismiss="modal" 
                                                onclick="javascript:return location.href='data-approve.php?page=request'" aria-hidden="true">&times;</button>
                                            </div>
                                            <?php
                                        }
                                        if($_GET['pesan'] == "gagal"){
                                            ?>
                                            <div class="alert alert-warning font-timesnew text-black" role="alert">
                                                <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data baru.
                                                <button type="button" class="close" data-bs-dismiss="modal" 
                                                onclick="javascript:return location.href='data-approve.php?page=request'" aria-hidden="true">&times;</button>
                                            </div>
                                            <?php
                                        }
                                    }
                                ?>
                            </section>
                            <div class="row">
                                <div class="card" style="min-width:1334.5px;">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered" id="example1">
                                                <thead>
                                                    <tr>
                                                        <th>Kodefikasi</th>
                                                        <th>Merk Aset</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $row = $lihat -> ListApprove();
                                                        foreach ($row as $isi) {
                                                            ?>
                                                            <tr>
                                                                <td><?=$isi['nomer_seri_aset']?></td>
                                                                <td><?=$isi['merk_aset']?></td>
                                                                <td>
                                                                    <form action="act-tambah.php" method="post">
                                                                        <input type="hidden" name="id" value="<?=$isi['id_approve']?>">
                                                                        <input type="hidden" name="kategori" value="<?=$isi['kode_kategori']?>">
                                                                        <input type="hidden" name="subkategori" value="<?=$isi['kode_subkategori']?>">
                                                                        <input type="hidden" name="ruas" value="<?=$isi['kode_ruas']?>">
                                                                        <input type="hidden" name="gerbang" value="<?=$isi['kode_gerbang']?>">
                                                                        <input type="hidden" name="nomer" value="<?=$isi['nomer_seri_aset']?>">
                                                                        <input type="hidden" name="merk" value="<?=$isi['merk_aset']?>">
                                                                        
                                                                        <select name="status" class="form-control" type="submit"
                                                                         onchange="this.form.submit()">
                                                                         <option value="">Pilih Status Approve</option>
                                                                         <option value="ditunda">Ditunda</option>
                                                                         <option value="diterima">Diterima</option>
                                                                        </select>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
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