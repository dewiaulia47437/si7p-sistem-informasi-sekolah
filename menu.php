<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Sekolah</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Beranda</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=siswa&actions=tampil">Data Siswa</a></li>
                        <li><a href="?page=guru&actions=tampil">Data Guru</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=siswa&actions=report">Laporan Data Siswa</a></li>
                        <li><a href="?page=guru&actions=report">Laporan Data Guru</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>


                <?php } ?>
                <?php if(isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=siswa&actions=tampil">Data Siswa</a></li>
                        <li><a href="?page=guru&actions=tampil">Data Guru</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=siswa&actions=report">Laporan Data Siswa</a></li>
                        <li><a href="?page=guru&actions=report">Laporan Data Guru</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>


                <?php } ?>


                <li><a href="?page=about&actions=tampil">Tentang</a></li>
                <li><a href="?page=kontak&actions=tampil">Kontak</a></li>

                <?php if (isset($_SESSION['username'])) { ?>
                <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
