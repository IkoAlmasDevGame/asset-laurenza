<?php 

if($_SESSION['user_level'] == ""){
    header("location:../tampilan/login/signin.php?pesan=belummasuk");
}

if($_SESSION['user_level'] == "Administrator" || $_SESSION['user_level'] == "Staff" || $_SESSION['user_level'] == "Manager" || $_SESSION['user_level'] == "Vice President"){
    ?>
    <style type="text/css">
        #fontSize {
            font-size: 16px;
            font-family: monospace;
        }
    </style>
    <div class="main-wrapper">
        <nav class="navbar navbar-default navbar-expand-lg main-navbar">
            <form>
                <div class="row">
                    <div class="img-responsive">
                        <img src="../../../assets/image/<?=$_SESSION['foto']?>" alt="profile" width="64" style="border-radius: 20px; top:0; bottom:0; right:20px; position:absolute;" title="<?php echo $_SESSION['username']?>">
                    </div>
                </div>
                <ul class="list-unstyled navbar-nav me-3 pt-4" style="font-size:18px;">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars text-danger"></i></a></li>
                </ul>
            </form>
        </nav>
        <div class="main-sidebar">
            <aside class="sidebar-wrapper">
                <div class="sidebar-brand">
                    <img src="../../../assets/icon/Hutama_karya.png" alt="Logo" class="sidebar-brand-sm" width="64"><a>PT Hutama Karya</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <img src="../../../assets/icon/Hutama_karya.png" alt="Logo" class="sidebar-brand-sm" width="64">
                </div>
                <ul class="sidebar-menu">
                    <!-- Halaman utama -->
                    <li class="menu-header pt-5">
                        Halaman Utama
                        <li>
                            <a href="../dashboard/dashboard.php" class="nav-link">
                                <i class="fa fa-fire mx-3 fw-bold"></i><span class="font-weight-600 mx-3" id="fontSize">Halaman utama</span>
                            </a>
                        </li>
                    </li>
                    <?php 
                        if($_SESSION['user_level'] == "Administrator"){
                            ?>
                            <li class="menu-header">
                                Daftar Account
                                <li>
                                    <a href="../admin/daftar.php?page=divisi" class="nav-link">
                                        <i class="fas fa-registered"></i><i class="fas fa-user-alt"></i><span class="font-weight-600 mx-5" id="fontSize">Daftar Divisi</span>
                                    </a>
                                    <a href="../admin/daftar.php?page=cabang" class="nav-link">
                                        <i class="fas fa-registered"></i><i class="fas fa-user-alt"></i><span class="font-weight-600 mx-5" id="fontSize">Daftar Cabang</span>
                                    </a>
                                </li>
                            </li>
                        <?php
                        }
                    ?>
                    <?php 
                        if($_SESSION['user_level'] == "Staff"){
                            ?>
                            <li class="menu-header">
                                Database Master
                                <li>
                                    <a href="../Ruas/data-ruas.php" class="nav-link">
                                        <i class="fas fa-building"></i><span class="font-weight-600 mx-3" id="fontSize">Database Ruas</span>
                                    </a>
                                    <a href="../Gerbang/data-gerbang.php" class="nav-link">
                                        <i class="fas fa-archive"></i><span class="font-weight-600 mx-3" id="fontSize">Database Gerbang</span>
                                    </a>
                                    <a href="../Kategori/data-kategori.php" class="nav-link">
                                        <i class="fas fa-cubes"></i><span class="font-weight-600 mx-3" id="fontSize">Database Kategori</span>
                                    </a>
                                    <a href="../SubKategori/data-sub.php" class="nav-link">
                                        <i class="fas fa-gift"></i><span class="font-weight-600 mx-3" id="fontSize">Database Sub Kategori</span>
                                    </a>
                                    <a href="../Kodefikasi/data-kodefikasi.php" class="nav-link">
                                        <i class="fas fa-cart-plus"></i><span class="font-weight-600 mx-3" id="fontSize">Database Kodefikasi</span>
                                    </a>
                                    <a href="../Inventori/data-inventori.php" class="nav-link">
                                        <i class="fas fa-cart-arrow-down"></i><span class="font-weight-600 mx-3" id="fontSize">Database Inventory</span>
                                    </a>
                                </li>
                            </li>
                        <?php
                        }
                    ?>
                    <?php 
                        if($_SESSION['user_level'] == "Manager"){
                            ?>
                            <li class="menu-header">
                                Database Master
                                <li>
                                    <a href="../manager/list.php" class="nav-link">
                                        <i class="fas fa-database"></i><i class="fas fa-user-alt"></i>
                                        <span class="font-weight-600 mx-3" id="fontSize">Database user</span>
                                    </a>
                                    <a href="../Kodefikasi/kodefikasi.php" class="nav-link">
                                        <i class="fas fa-database"></i><i class="fas fa-cart-plus"></i>
                                        <span class="font-weight-600 mx-3" id="fontSize">Kodefikasi</span>
                                    </a>
                                    <a href="../Inventori/inventori.php" class="nav-link">
                                        <i class="fas fa-database"></i><i class="fa fa-cart-arrow-down"></i>
                                        <span class="font-weight-600 mx-3" id="fontSize">Inventori</span>
                                    </a>
                                    <a href="../manager/data-approve.php?page=approve" class="nav-link">
                                    <i class="fas fa-database"></i><i class="fas fa-check"></i>
                                        <span class="font-weight-600 mx-3" id="fontSize">Data Approve</span>
                                    </a>
                                    <a href="../manager/data-approve.php?page=request" class="nav-link">
                                        <i class="fas fa-database"></i><i class="fas fa-check-circle"></i>
                                        <span class="font-weight-600 mx-3" id="fontSize">Request Approve</span>
                                    </a>
                                </li>
                            </li>
                        <?php
                        }
                    ?>
                    <?php 
                        if($_SESSION['user_level'] == "Vice President"){
                            ?>
                            <li class="menu-header">
                                Database Master
                                <li>
                                    <a href="../Kodefikasi/kodefikasi.php" class="nav-link">
                                        <i class="fas fa-database"></i><i class="fas fa-cart-plus"></i>
                                        <span class="font-weight-600 mx-3" id="fontSize">Kodefikasi</span>
                                    </a>
                                    <a href="../Inventori/inventori.php" class="nav-link">
                                        <i class="fas fa-database"></i><i class="fa fa-cart-arrow-down"></i>
                                        <span class="font-weight-600 mx-3" id="fontSize">Inventori</span>
                                    </a>
                                    <a class="nav-link" href="../VicePresident/status-approve.php">
                                        <i class="fas fa-database"></i><i class="fas fa-check"></i>
                                        <span class="font-weight-600 mx-3" id="fontSize">Status Approve</span>
                                    </a>
                                </li>
                            </li>
                        <?php
                        }
                    ?>
                    <?php 
                        if($_SESSION['user_level'] == "Administrator" || $_SESSION['user_level'] == "Staff" || $_SESSION['user_level'] == "Manager" || $_SESSION['user_level'] == "Vice President"){
                            ?>
                            <li class="menu-header">
                                Pengaturan
                                <li>
                                    <a href="../pengaturan/user.php?id=<?=$_SESSION['id_user_cabang']?>&user_level=<?=$_SESSION['user_level']?>" class="nav-link">
                                        <i class="fas fa-edit" title="<?php echo $_SESSION['bagian']." | ".$_SESSION['operasional']." | ".$_SESSION['cabang']?>"></i><i class="fas fa-user-alt" title="<?php echo $_SESSION['username']?>"></i>
                                        <span class="font-weight-600 mx-3" id="fontSize">Profile</span>
                                    </a>
                                    <a href="../tampilan/header.php?aksi=keluar" class="nav-link" onclick="javascript:return confirm('Apakah anda ingin keluar dari website ini ?')">
                                    <i class="fas fa-sign-out-alt has-icon text-danger"></i>
                                        <span class="text-danger font-weight-600 mx-5" id="fontSize">Logout</span>
                                    </a>
                                </li>
                            <?php
                        }
                    ?>
                </ul>
            </aside>
        </div>
    </div>
    <?php
}else{
    header("location:../tampilan/login/signin.php?pesan=gagal");   
}

?>