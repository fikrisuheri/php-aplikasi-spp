<?php
require 'functions.php';
$query = 'SELECT pembayaran.*,petugas.*,siswa.* FROM pembayaran INNER JOIN petugas ON pembayaran.petugas_id = petugas.id_petugas INNER JOIN siswa ON pembayaran.nisn = siswa.nisn';
$dataspp = ambildata($conn, $query);
$page = 'transaksi';
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
            <div style="overflow: hidden">
                <a href="carisiswa.php" class="button open-sans bg-blue" style="float:right">Transaksi Baru</a>
            </div>
            <div style="overflow: hidden" class="mt-1">
                <table class="table">
                    <tr>
                        <th width="5%" align="center">NO</th>
                        <th>Nama Siswa</th>
                        <th>Petugas</th>
                        <th>Jumlah Bayar</th>
                        <th>Bulan Bayar</th>
                        <th>Tahun Bayar</th>
                        <th>Tanggal Pembayaran</th>
                        <th width="15%">Aksi</th>
                    </tr>
                    <?php $no = 1;
                    foreach ($dataspp as $data) : ?>
                        <tr class="">
                            <td align="center"><?= $no++ ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['nama_petugas'] ?></td>
                            <td><?= $data['jumlah_bayar'] ?></td>
                            <td><?= $data['bulan_dibayar'] ?></td>
                            <td><?= $data['tahun_dibayar'] ?></td>
                            <td><?= $data['tgl_bayar'] ?></td>
                            <td>
                                <a href="datasiswaedit.php?id=<?= $data['id_pembayaran'] ?>" class="button bg-yellow">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <?php require 'footer.php' ?>
</body>

</html>