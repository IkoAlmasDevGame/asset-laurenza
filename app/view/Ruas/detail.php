<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Detail Data Master Ruas</title>

    <?php 
        include("../tampilan/header.php");
        $id = $_GET['id'];
        $row = $lihat -> ruas_edit($id);
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
                        <h4 class="panel-title fw-bold font-timesnew">Detail Data Master Ruas</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="data-ruas.php" class="text-decoration-none text-primary">Data Master Ruas</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="detail.php?id=<?=$id?>" class="text-decoration-none text-primary">Detail Data Ruas</a></div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <input type="hidden" name="id" value="<?=$row['id_ruas']?>" readonly>
                                    <tr>
                                        <td>Kode Ruas </td>
                                        <td><input type="text" name="kode_ruas" value="<?=$row['kode_ruas']?>" class="form-control" readonly>
                                        <small class="text-muted">Masukkan kode Ruas</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ruas </td>
                                        <td><input type="text" name="nama_ruas" value="<?=$row['nama_ruas']?>" class="form-control" readonly>
                                        <small class="text-muted">Masukkan Nama Ruas</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Panjang Ruas </td>
                                        <td><input type="number" name="panjang_ruas" value="<?=$row['panjang_ruas']?>" class="form-control" readonly>
                                        <small class="text-muted">Masukkan Panjang Ruas</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi Ruas </td>
                                        <td><input type="text" name="lokasi_ruas" value="<?=$row['lokasi_ruas']?>" class="form-control" readonly>
                                        <small class="text-muted">Masukkan Lokasi Ruas</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Gerbang Tol</td>
                                        <td><input type="number" name="jumlah_ruas" value="<?=$row['jumlah_ruas']?>" class="form-control" readonly>
                                        <small class="text-muted">Masukkan jumlah Gerbang Tol</small>
                                        </td>
                                    </tr>
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