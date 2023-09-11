<?php 
include("../tampilan/header.php");
include("../tampilan/sidebar.php");

$jumlah_ruas = $lihat -> ruas_row();
$jumlah_kategori = $lihat -> kategori_row();
$jumlah_gerbang = $lihat -> gerbang_row();
$jumlah_kodefikasi = $lihat -> kodefikasi_row();
$jumlah_subkategori = $lihat -> subkategori_row();
$jumlah_inventori = $lihat -> inventori_row();
?>

<div class="main-content">
    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "berhasil"){
                ?>
                <div class="alert alert-success" role="alert">
                    <strong>Success </strong>Anda berhasil login di website ini.
                    <button type="button" class="close" data-bs-dismiss="modal" 
                    onclick="javascript:location.href='dashboard.php'" aria-hidden="true">&times;</button>
                </div>
                <?php
            }
            if($_GET['pesan'] == "edit"){
                ?>
                <div class="alert alert-warning font-timesnew text-black" role="alert">
                    <strong class="text-black fw-bold font-timesnew">Success ! </strong>Anda Telah mengedit data baru.
                    <button type="button" class="close" data-bs-dismiss="modal" 
                    onclick="javascript:return location.href='dashboard.php'" aria-hidden="true">&times;</button>
                </div>
                <?php
            }
            if($_GET['pesan'] == "gagal"){
                ?>
                <div class="alert alert-warning font-timesnew text-black" role="alert">
                    <strong class="text-black fw-bold font-timesnew">Perhatian ! </strong>Anda gagal menambahkan data baru.
                    <button type="button" class="close" data-bs-dismiss="modal" 
                    onclick="javascript:return location.href='dashboard.php'" aria-hidden="true">&times;</button>
                </div>
                <?php
            }
        }
    ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <section class="section">
                <div class="section-header">
                    <h3 class="panel-title fw-bold font-timesnew" style="font-size: 18px;">Halaman utama</h3>
                </div>
            </section>
            <div class="col-xl-12">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="d-flex justify-content-around align-items-center flex-wrap">
                                    <div class="card" style="background-color:skyblue; width:150px; max-width:300;">
                                        <div class="card-body d-flex justify-content-around align-items-center">
                                            <i class="fas fa-building text-white" title="data ruas" style="font-size: 2.5rem;"></i>
                                            <div class="card-text text-white" style="font-size: 2.5rem;">
                                            <?php echo number_format($jumlah_ruas['ttl_ruas']); ?></div>
                                        </div>
                                        <div class="card-text text-center text-black mb-1" style="font-size: 1.8rem;">Data Ruas</div>
                                    </div>
                                    <div class="card" style="background-color:skyblue; width:150px; max-width:300;">
                                        <div class="card-body d-flex justify-content-around align-items-center">
                                            <i class="fas fa-cubes text-white" title="data kategori" style="font-size: 2.5rem;"></i>
                                            <div class="card-text text-white" style="font-size: 2.5rem;">
                                            <?php echo number_format($jumlah_kategori['ttl_kategori']); ?></div>
                                        </div>
                                        <div class="card-text text-center text-black mb-1" style="font-size: 1.8rem;">Data Kategori</div>
                                    </div>
                                    <div class="card" style="background-color:skyblue; width:150px; max-width:300;">
                                        <div class="card-body d-flex justify-content-around align-items-center">
                                            <i class="fas fa-archive text-white" title="data gerbang" style="font-size: 2.5rem;"></i>
                                            <div class="card-text text-white" style="font-size: 2.5rem;">
                                            <?php echo number_format($jumlah_gerbang['ttl_gerbang']); ?></div>
                                        </div>
                                        <div class="card-text text-center text-black mb-1" style="font-size: 1.8rem;">Data Gerbang</div>
                                    </div>
                                    <div class="card" style="background-color:skyblue; width:150px; max-width:300;">
                                        <div class="card-body d-flex justify-content-around align-items-center">
                                            <i class="fas fa-cart-plus text-white" title="data kodefikasi" style="font-size: 2.5rem;"></i>
                                            <div class="card-text text-white" style="font-size: 2.5rem;">
                                            <?php echo number_format($jumlah_kodefikasi['ttl_kodefikasi']); ?></div>
                                        </div>
                                        <div class="card-text text-center text-black mb-1" style="font-size: 1.8rem;">Data Kodefikasi</div>
                                    </div>
                                    <div class="card" style="background-color:skyblue; width:150px; max-width:300;">
                                        <div class="card-body d-flex justify-content-around align-items-center">
                                            <i class="fas fa-gift text-white" title="data sub kategori" style="font-size: 2.5rem;"></i>
                                            <div class="card-text text-white" style="font-size: 2.5rem;">
                                            <?php echo number_format($jumlah_subkategori['ttl_subkategori']); ?></div>
                                        </div>
                                        <div class="card-text text-center text-black mb-1" style="font-size: 1.8rem;">Data Sub Kategori</div>
                                    </div>
                                    <div class="card" style="background-color:skyblue; width:150px; max-width:300;">
                                        <div class="card-body d-flex justify-content-around align-items-center">
                                            <i class="fas fa-cart-arrow-down text-white" title="data inventori" style="font-size: 2.5rem;"></i>
                                            <div class="card-text text-white" style="font-size: 2.5rem;">
                                            <?php echo number_format($jumlah_inventori['ttl_inventori']); ?></div>
                                        </div>
                                        <div class="card-text text-center text-black mb-1" style="font-size: 1.8rem;">Data Inventori</div>
                                    </div>
                                </div>
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