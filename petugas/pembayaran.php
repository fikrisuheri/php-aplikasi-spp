<?php
require 'functions.php';
$page = 'transaksi';
$bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
if ($_GET) {
    $q = "SELECT siswa.*,kelas.* FROM siswa INNER JOIN kelas ON siswa.kelas_id = kelas.id_kelas WHERE nis = " . $_GET['id'];
    $siswa = ambilsatubaris($conn, $q);
}

if ($_POST) {
    $petugas_id = $_SESSION['user_id'];
    $nisn = $siswa['nisn'];
    $tgl_bayr = Date('Y-m-d');
    $bulan_dibayar = $_POST['bulan_dibayar'];
    $tahun_dibayar = $_POST['tahun_dibayar'];
    $spp_id = $siswa['spp_id'];
    $jumlah_bayar = $_POST['jumlah_bayar'];

    $querytambah = "INSERT INTO pembayaran VALUES('','$petugas_id','$nisn','$tgl_bayr','$bulan_dibayar','$tahun_dibayar','$spp_id','$jumlah_bayar')";
    $simpan = bisa($conn, $querytambah);

    if ($simpan == 1) {
        header('location:transaksi.php');
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
                    <label for="">Nama Siswa</label>
                    <input type="text" name="" id="" disabled value="<?= $siswa['nama'] ?>" class="form-style">
                    <label for="">Kelas</label>
                    <input type="text" name="" id="" disabled value="<?= $siswa['nama_kelas'] ?>" class="form-style">
                    <label for="">Bula Yang Di Bayar</label>
                    <select name="bulan_dibayar" id="" class="form-style">
                        <option value="" disabled selected>Pilih Bulan</option>
                        <?php foreach ($bulan as $bln) : ?>
                            <option value="<?= $bln ?>"><?= $bln ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="">Tahun Bayar</label>
                    <input type="number" name="tahun_dibayar" id="" class="form-style">
                    <label for="">Jumlah Bayar</label>
                    <input type="number" name="jumlah_bayar" id="" class="form-style">
                    <button type="submit" name="submit" class="button open-sans bg-green" style="float:right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <?php require 'footer.php' ?>
</body>

</html>