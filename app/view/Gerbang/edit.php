<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">
    <title>Edit Data Master Gerbang</title>

    <?php 
        include("../tampilan/header.php");
        $id = $_GET['id'];
        $row = $lihat -> gerbang_edit($id);
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
                        <h4 class="panel-title fw-bold font-timesnew">Edit Data Master Gerbang</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="data-gerbang.php" class="text-decoration-none text-primary">Data Master Gerbang</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="edit.php?id=<?=$id?>" class="text-decoration-none text-primary">Edit Data Gerbang</a></div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="act-edit.php" method="post">
                                    <table class="table table-striped table-bordered">
                                        <input type="hidden" name="id" value="<?=$row['id_gerbang']?>" readonly>
                                        <tr>
                                            <td>Kode Gerbang </td>
                                            <td><input type="text" name="kode" value="<?=$row['kode_gerbang']?>" class="form-control">
                                            <small class="text-muted">Masukkan kode Ruas</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Gerbang </td>
                                            <td><input type="text" name="gerbang" value="<?=$row['nama_gerbang']?>" class="form-control">
                                            <small class="text-muted">Masukkan Nama gerbang</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi Gerbang </td>
                                            <td><input type="text" name="lokasi" value="<?=$row['lokasi_gerbang']?>" class="form-control">
                                            <small class="text-muted">Masukkan Lokasi gerbang</small>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="modal-footer">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                            <i class="fas fa-save"></i>
                                            <span class="mx-3 font-weight-600">Ubah Data</span>
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