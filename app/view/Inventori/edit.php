<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Edit Data Master Inventori</title>

    <?php 
        include("../tampilan/header.php");
        $id = $_GET['id'];
        $row = $lihat -> inventori_edit($id);
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
                        <h4 class="panel-title font-timesnew">Edit Data Master Inventori</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="data-inventori.php" class="text-decoration-none text-primary">Data Inventori</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="edit.php?id=<?=$id;?>" class="text-decoration-none text-primary">Edit Data Inventori</a></div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="act-edit.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?=$row['id_inventori']?>">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <td>Kodefikasi</td>
                                            <td>
                                                <select name="nomer_seri_aset" class="form-control w-75" style="float: right;">
                                                    <option><?=$row['nomer_seri_aset']?></option>
                                                    <?php 
                                                        global $koneksi;
                                                        $sql = "SELECT * from m_inventori";
                                                        $hasil = $koneksi->prepare($sql);
                                                        $hasil -> execute();
                                                        foreach ($hasil as $isi) {
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
                                            <td><input type="text" name="merk_aset" value="<?=$row['merk_aset']?>" class="form-control w-75" style="float: right;"></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Aset</td>
                                            <td>
                                                <select name="tahun_input" class="form-control w-75" style="float: right;">
                                                    <option style="color:green;"><?=$row['tahun_input']?></option>
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
                                            <td><input type="number" name="harga_perolehan" value="<?=$row['harga_perolehan']?>" class="form-control w-75" style="float: right;" require placeholder="Masukkan Harga Perolehan"></td>
                                        </tr>
                                        <tr>
                                            <td>Harga Perolehan</td>
                                            <td><input type="text" name="masa_penyusutan_aset" value="<?=$row['masa_penyusutan_aset']?>" class="form-control w-75" style="float: right;" require placeholder="Masukkan Akumulasi Penyusutan"></td>
                                        </tr>
                                        <tr>
                                            <td>Waktu Penyusutan</td>
                                            <td><input type="text" name="waktu_penyusutan_aset" value="<?=$row['waktu_penyusutan_aset']?>" class="form-control w-75" style="float: right;" require placeholder="Masukkan Waktu Penyusutan"></td>
                                        </tr>
                                        <tr>
                                            <td>Kondisi Aset</td>
                                            <td>
                                                <select name="kondisi_aset" class="form-control w-75" style="float: right;">
                                                    <option><?=$row['kondisi_aset']?></option>
                                                    <option value="sangat bagus">Sangat Bagus</option>
                                                    <option value="bagus">Bagus</option>
                                                    <option value="rusak">Rusak</option>
                                                    <option value="sangat rusak">Sangat Rusak</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi Aset</td>
                                            <td><input type="text" name="lokasi_aset" value="<?=$row['lokasi_aset']?>" class="form-control w-75" style="float: right;" require></td>
                                        </tr>
                                        <tr>
                                            <td>Uploud Foto</td>
                                            <td>
                                                <input type="file" name="foto_aset" value="<?=$row['foto_aset']?>" class="form-control w-75" style="float: right;" require>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="modal-footer">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                            <i class="fas fa-save"></i>
                                            <span class="mx-3 font-weight-600">Edit Data</span>
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

    