<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Database Master Kategori</title>

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
                        <h4 class="panel-title fw-bold font-timesnew">Data Master Kategori</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item active">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item active">
                                <a href="data-kategori.php" class="text-decoration-none text-primary">Data Master Kategori</a></div>
                        </div>
                    </div>
                        <?php 
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "tambah"){
                                    ?>
                                    <div class="alert alert-success font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Selamat anda sudah menambahkan data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kategori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "edit"){
                                    ?>
                                    <div class="alert alert-info font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah mengedit data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kategori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "hapus"){
                                    ?>
                                    <div class="alert alert-danger font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Success </strong>Anda sudah menghapus data ruas.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kategori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                                if($_GET['pesan'] == "gagal"){
                                    ?>
                                    <div class="alert alert-warning font-timesnew text-black" role="alert">
                                        <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data ruas baru.
                                        <button type="button" class="close" data-bs-dismiss="modal" 
                                        onclick="javascript:return location.href='data-kategori.php'" aria-hidden="true">&times;</button>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                </section>
                <div class="row">
                    <div style="min-width:1333.5px;">
                        <div class="card">
                            <div class="card-header-form">
                                <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">
                                    <i class="fas fa-plus"></i>
                                    <span class="mx-3 font-weight-600">Tambah Data Kategori</span>
                                </button>
                                <button class="btn btn-warning btn-lg" onclick="javascript:location.href='data-kategori.php'">
                                    <i class="glyphicon glyphicon-refresh"></i>
                                    <span class="mx-3 font-weight-600">Refresh</span>
                                </button>
                                <div class="mb-3"></div>
                                <form method="POST" action="act-edit.php">
                                        <?php
                                            global $kon;
                                            if (!empty($_GET['id'])) {
                                                $id = $_GET['id'];
                                                $sql = "SELECT * FROM m_kategori WHERE id_kategori = '$id'";
                                                $row = $kon->query($sql);
                                                $edit = $row->fetch_array();
                                        ?>
                                        <table>
                                            <tr>
                                                <td style="width:25pc;"><input type="text" class="form-control"
                                                    value="<?= $edit['nama_kategori']; ?>" required name="kategori"
                                                    placeholder="Masukan Kategori Barang Baru">
                                                    <input type="hidden" name="id" value="<?= $edit['id_kategori']; ?>">
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
                                                <th>Kode Kategori</th>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $row = $lihat -> kategori();
                                                $no = 1;
                                                foreach ($row as $isi) {
                                                    ?>
                                                        <tr>
                                                            <td><?=$no;?></td>
                                                            <td><?=$isi['kode_kategori']?></td>
                                                            <td><?=$isi['nama_kategori']?></td>
                                                            <td>
                                                                <a href="data-kategori.php?id=<?=$isi['id_kategori']?>" onclick="javascript:return confirm('Apakah anda ingin edit data ini ?')" 
                                                                class="btn btn-warning btn-sm">Edit</a>
                                                                <a href="act-hapus.php?id=<?=$isi['id_kategori']?>" onclick="javascript:return confirm('Apakah anda ingin menghapus data ini ?')"
                                                                class="btn btn-danger btn-sm">Hapus</a>
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
                    </div>
                    <div class="modal" id="myModal" aria-hidden="true" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background:skyblue;color:#fff;">
                                    <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="act-tambah.php" method="post">
                                        <table class="table table-striped bordered">
                                            <tr>
                                                <td>Kode Kategori </td>
                                                <td><input type="text" name="kode" class="form-control">
                                                <small class="text-muted">Masukkan kode Kategori</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Ruas </td>
                                                <td><input type="text" name="kategori" class="form-control">
                                                <small class="text-muted">Masukkan Nama Kategori</small>
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