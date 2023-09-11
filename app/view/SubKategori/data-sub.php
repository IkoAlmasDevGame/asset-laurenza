<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Data Master Sub Kategori</title>

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
                        <h4 class="panel-title fw-bold font-timesnew">Data Master Sub Kategori</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="" class="text-decoration-none text-primary">Data Master Sub Kategori</a></div>
                        </div>
                    </div>
                        <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "tambah"){
                                    ?>
                                    <div class="alert alert-success font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Selamat anda sudah menambahkan data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-sub.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "edit"){
                                    ?>
                                    <div class="alert alert-info font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah mengedit data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-sub.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "hapus"){
                                    ?>
                                    <div class="alert alert-danger font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah menghapus data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-sub.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "gagal"){
                                    ?>
                                    <div class="alert alert-warning font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data ruas baru.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-sub.php'" aria-hidden="true">&times;</button>
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
                            <button class="btn btn-warning btn-lg" onclick="javascript:return window.location.href='data-sub.php'">
                                <i class="glyphicon glyphicon-refresh"></i>
                                <span class="mx-3 font-weight-600">Refresh</span>
                            </button>
                            <div class="mb-3"></div>
                            <form method="POST" action="act-edit.php">
                                <?php
                                    global $kon;
                                    if (!empty($_GET['id'])) {
                                        $id = $_GET['id'];
                                        $sql = "SELECT * FROM m_subkategori WHERE id_subkategori = '$id'";
                                        $row = $kon->query($sql);
                                        $edit = $row->fetch_array();
                                ?>
                                <table>
                                    <tr>
                                        <td style="width:25pc;"><input type="text" class="form-control"
                                            value="<?= $edit['nama_subkategori']; ?>" required name="subkategori"
                                            placeholder="Masukan Sub Kategori Barang Baru">
                                            <input type="hidden" name="id" value="<?= $edit['id_subkategori']; ?>">
                                        </td>
                                        <td style="padding-left:10px;"><button id="tombol-simpan"
                                            class="btn btn-primary" type="submit"><i class="fa fa-edit"></i>Ubah Data</button></td>
                                    </tr>
                                </table>
                                <?php } ?>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Sub Kategori</th>
                                            <th>Nama Sub Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $row = $lihat -> subkategori();
                                            $no = 1;
                                            foreach ($row as $isi) {
                                                ?>
                                                <tr>
                                                    <td><?=$no;?></td>
                                                    <td><?=$isi['kode_subkategori']?></td>
                                                    <td><?=$isi['nama_subkategori']?></td>
                                                    <td>
                                                        <a href="data-sub.php?id=<?=$isi['id_subkategori']?>" onclick="javascript:return confirm('Apakah anda ingin edit data ini ?')" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="act-hapus.php?id=<?=$isi['id_subkategori']?>" onclick="javascript:return confirm('Apakah anda ingin menghapus data ini ?')" class="btn btn-danger btn-sm">Hapus</a>
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
                                    <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Sub Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="act-tambah.php" method="post">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td>Kode Sub Kategori </td>
                                                <td><input type="text" name="kode" class="form-control">
                                                <small class="text-muted">Masukkan kode Sub Kategori</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Sub Kategori </td>
                                                <td><input type="text" name="subkategori" class="form-control">
                                                <small class="text-muted">Masukkan Nama Sub Kategori</small>
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