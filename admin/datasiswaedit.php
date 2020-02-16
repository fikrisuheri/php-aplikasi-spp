<?php
require 'functions.php';
$page = 'kelas';
$dataspp = ambildata($conn,'SELECT * FROM spp');
$datakelas = ambildata($conn,'SELECT * FROM kelas');

if ($_GET['id']) {

    $query = 'SELECT * FROM siswa where nisn = ' . $_GET['id'];
    $data = ambilsatubaris($conn, $query);
}

if ($_POST) {
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $spp_id = $_POST['spp_id'];
    $kelas_id = $_POST['kelas_id'];
   

    $querytambah = "UPDATE siswa SET nisn = '$nisn',nis='$nis',nama = '$nama',alamat = '$alamat',no_telp='$no_telp',spp_id='$spp_id',kelas_id='$kelas_id' WHERE nisn =".$_GET['id'] ;
    $simpan = bisa($conn, $querytambah);

    if ($simpan == 1) {
        header('location:datasiswa.php');
    } else {
        echo 'Gagal Tambah Data';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/admin/style.css">
    <link rel="stylesheet" href="../assets/fikcss/fikcss.css">
    <style>

    </style>
    <title>DASHBOARD SPP</title>
</head>

<body>
    <?php require 'header.php' ?>

    <div class="container mt-1">
        <div class="bg-grey p-1">
            <div style="overflow: hidden" class="pr-5">
                <a href="javascript:void(0)" onclick="window.history.back()" class="button open-sans bg-blue" style="float:right">Kembali</a>
            </div>
            <div class="pl-5 pr-5 ov-hidden">
                <form action="" method="POST">
                    <label for="nisn">NISN</label>
                    <input type="text" name="nisn" id="nisn" value="<?= $data['nisn']?>" class="form-style" required>

                    <label for="nis">NIS</label>
                    <input type="text" name="nis" id="nis" value="<?= $data['nis']?>" class="form-style" required>

                    <label for="nama_kelas">Nama Siswa</label>
                    <input type="text" name="nama" id="nama" value="<?= $data['nama']?>" class="form-style" required>

                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="10" class="form-style"><?= $data['alamat']?></textarea>

                    <label for="no_telp">No Telepon</label>
                    <input type="text" name="no_telp" id="no_telp" value="<?= $data['no_telp']?>" class="form-style" required>

                    <label for="spp_id">Tahun SPP</label>
                    <select name="spp_id" id="spp_id" class="form-style">
                        <option value="" disabled selected>Pilih Tahun Spp</option>
                        <?php foreach ($dataspp as $spp) : ?>
                            <option value="<?= $spp['id_spp'] ?>" <?php if($spp['id_spp'] == $data['spp_id']){echo 'selected';}?>><?= $spp['tahun'] ?></option>
                        <?php endforeach ?>
                    </select>

                    <label for="spp_id">Kelas</label>
                    <select name="kelas_id" id="spp_id" class="form-style">
                        <option value="" disabled selected>Pilih Kelas</option>
                        <?php foreach ($datakelas as $kelas) : ?>
                            <option value="<?= $kelas['id_kelas'] ?>" <?php if($kelas['id_kelas'] == $data['kelas_id']){echo 'selected';}?>><?= $kelas['nama_kelas'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <button type="submit" name="submit" class="button open-sans bg-green" style="float:right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <?php require 'footer.php' ?>
</body>

</html>