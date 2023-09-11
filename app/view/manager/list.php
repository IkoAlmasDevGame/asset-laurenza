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

    <title>Data</title>
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
                        <h4 class="panel-title font-timesnew">Data Perusahaan</h4>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb breadcrumb-item">
                                <a href="../dashboard/dashboard.php" class="text-decoration-none text-primary">Halaman utama</a></div>
                            <div class="breadcrumb breadcrumb-item">
                                <a href="list.php" class="text-decoration-none text-primary">Data</a></div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jabatan</th>
                                            <th>Bagian</th>
                                            <th>Operasional</th>
                                            <th>Cabang</th>
                                            <th>Telephone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $row = $lihat -> log();
                                            $no = 1;
                                            foreach ($row as $isi) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $isi['username'] ?></td>
                                                    <td><?php echo $isi['user_level'] ?></td>
                                                    <td><?php echo $isi['bagian'] ?></td>
                                                    <td><?php echo $isi['operasional'] ?></td>
                                                    <td><?php echo $isi['cabang'] ?></td>
                                                    <td><?php echo $isi['telpone'] ?></td>
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
            </div>
        </div>
    </div>
    <?php 
        include("../tampilan/footer.php");
    ?>