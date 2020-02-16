<div class="container mt-1">
    <div class="topnav bg-blue">
        <a href="dashboard.php" <?php if($page == 'dashboard'){echo 'class="active"';} ?>>Dashboard</a>
        <a href="transaksi.php" <?php if($page == 'transaksi'){echo 'class="active"';} ?>>Transaksi</a>
        <a href="datasiswa.php"  <?php if($page == 'siswa'){echo 'class="active"';} ?>>Data Siswa</a>
        <a href="datakelas.php" <?php if($page == 'kelas'){echo 'class="active"';} ?>>Data Kelas</a>
        <a href="dataspp.php" <?php if($page == 'spp'){echo 'class="active"';} ?>>Data SPP</a>
        <a href="../logout.php">Logout</a>
    </div>
</div>