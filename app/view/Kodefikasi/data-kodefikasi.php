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
                                <a href="data-kodefikasi.php" class="text-decoration-none text-primary">Kodefikasi</a></div>
                        </div>
                    </div>
                        <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "tambah"){
                                    ?>
                                    <div class="alert alert-success font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Selamat anda sudah menambahkan data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kodefikasi.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "edit"){
                                    ?>
                                    <div class="alert alert-info font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah mengedit data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kodefikasi.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "hapus"){
                                    ?>
                                    <div class="alert alert-danger font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah menghapus data.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kodefikasi.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "gagal"){
                                    ?>
                                    <div class="alert alert-warning font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data baru.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kodefikasi.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                </section>
                <div class="row">
                    <div class="card" style="min-width:1334.5px;">
                        <div class="card-header-form">
                            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">
                                <i class="fas fa-plus"></i>
                                <span class="mx-3 font-weight-600">Tambah Data Kodefikasi</span>
                            </button>
                            <button class="btn btn-warning btn-lg" onclick="javascript:window.location.href='data-kodefikasi.php'">
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
                                                    <td>
                                                        <?php 
                                                            global $koneksi;
                                                            $id = htmlentities($_POST['id']);
                                                            $nomor = htmlentities($_POST['nomer_seri_aset']);
                                                            $d = array($nomor,$id);
                                                            $sql = "UPDATE m_kodefikasi SET nomer_seri_aset=? WHERE id_kodefikasi=?";
                                                            $row = $koneksi->prepare($sql);
                                                            $row->execute($d);
                                                        ?>
                                                        <form action="data-kodefikasi.php?pesan=tambah" method="post">
                                                            <input type="hidden" name="id" value="<?=$isi['id_kodefikasi']?>">
                                                            <?php 
                                                                if(!empty($_GET['kode'] == "yes")){
                                                                    ?>
                                                                    <input type="text" class="form-control" style="width:18pc;"
                                                                        value="<?=$isi['nomer_seri_aset']; ?>" required name="nomer_seri_aset">
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <?=$isi['nomer_seri_aset']; ?>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a href="edit.php?id=<?=$isi['id_kodefikasi']?>" onclick="javascript:return confirm('Apakah anda ingin edit data ini ?')" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="act-hapus.php?id=<?=$isi['id_kodefikasi']?>" onclick="javascript:return confirm('Apakah anda ingin menghapus data ini ?')" class="btn btn-danger btn-sm">Hapus</a>
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
                    <div class="modal" id="myModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background:skyblue;color:#fff;">
                                    <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Kodefikasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="act-tambah.php" method="post">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td>Kode Kategori</td>
                                                <td>
                                                    <select name="kode_kategori" class="form-control" require>
                                                        <option value="#">Pilih Kode Kategori</option>
                                                        <?php 
                                                            $row = $lihat -> kategori();
                                                            foreach ($row as $isi) {
                                                                ?>
                                                                <option value="<?=$isi['kode_kategori']?>">
                                                                    <?=$isi['kode_kategori']." - ".$isi['nama_kategori']?>
                                                                </option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kode Sub Kategori</td>
                                                <td>
                                                    <select name="kode_subkategori" class="form-control" require>
                                                        <option value="#">Pilih Kode Sub Kategori</option>
                                                        <?php 
                                                            $row = $lihat -> subkategori();
                                                            foreach ($row as $isi) {
                                                                ?>
                                                                <option value="<?=$isi['kode_subkategori']?>">
                                                                    <?=$isi['kode_subkategori']." - ".$isi['nama_subkategori']?>
                                                                </option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kode Ruas</td>
                                                <td>
                                                    <select name="kode_ruas" class="form-control" require>
                                                        <option value="#">Pilih Kode Ruas</option>
                                                        <?php 
                                                            $row = $lihat -> ruas();
                                                            foreach ($row as $isi) {
                                                                ?>
                                                                <option value="<?=$isi['kode_ruas']?>">
                                                                    <?=$isi['kode_ruas']." - ".$isi['nama_ruas']?>
                                                                </option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kode Gerbang</td>
                                                <td>
                                                    <select name="kode_gerbang" class="form-control" require>
                                                        <option value="#">Pilih Kode Gerbang</option>
                                                        <?php 
                                                            $row = $lihat -> gerbang();
                                                            foreach ($row as $isi) {
                                                                ?>
                                                                <option value="<?=$isi['kode_gerbang']?>">
                                                                    <?=$isi['kode_gerbang']." - ".$isi['nama_gerbang']?>
                                                                </option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>
                                                    <select name="tahun_input" class="form-control">
                                                        <option selected="selected">Pilih Tahun</option>
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