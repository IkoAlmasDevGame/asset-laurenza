<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="description" content="PT Hutama Karya Remake">
    <meta name="description" content="By Developer Iko Almas">

    <title>Edit Data Master Kodefikasi</title>

    <?php 
        include("../tampilan/header.php");
        $id = $_GET['id'];
        $hasil = $lihat -> kodefikasi_edit($id);
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
                        <div class="">
                            <div class=""><a href="" class=""></a></div>
                            <div class=""><a href="" class=""></a></div>
                            <div class=""><a href="" class=""></a></div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="act-edit.php" method="post">
                                    <input type="hidden" name="id" value="<?=$hasil['id_kodefikasi']?>">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td>Kode Kategori</td>
                                                <td>
                                                    <select name="kode_kategori" class="form-control w-75" require>
                                                        <option value="<?=$hasil['kode_kategori']?>"><?=$hasil['kode_kategori']." - ".$hasil['nama_kategori']?></option>
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
                                                    <select name="kode_subkategori" class="form-control w-75" require>
                                                        <option value="<?=$hasil['kode_subkategori']?>"><?=$hasil['kode_subkategori']." - ".$hasil['nama_subkategori']?></option>
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
                                                    <select name="kode_ruas" class="form-control w-75" require>
                                                        <option value="<?=$hasil['kode_ruas']?>"><?=$hasil['kode_ruas']." - ".$hasil['nama_ruas']?></option>
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
                                                    <select name="kode_gerbang" class="form-control w-75" require>
                                                        <option value="<?=$hasil['kode_gerbang']?>"><?=$hasil['kode_gerbang']." - ".$hasil['nama_gerbang']?></option>
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
                                                    <select name="tahun_input" class="form-control w-75">
                                                        <option><?php echo $hasil['tahun_input']; ?></option>
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
    <?php 
        include("../tampilan/footer.php");
    ?>