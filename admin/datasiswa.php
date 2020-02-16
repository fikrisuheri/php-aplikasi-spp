<?php
require 'functions.php';
$query = 'SELECT siswa.*,kelas.nama_kelas,spp.tahun FROM siswa
INNER JOIN kelas ON siswa.kelas_id = kelas.id_kelas
INNER JOIN spp ON siswa.spp_id = spp.id_spp';
$page = 'siswa';
$dataspp = ambildata($conn, $query);
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
                <a href="datasiswatambah.php" class="button open-sans bg-blue" style="float:right">Tambah Data Siswa</a>
            </div>
            <div style="overflow: hidden" class="mt-1">
                <table class="table">
                    <tr>
                        <th width="5%">NO</th>
                        <th>Nisn</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Tahun SPP</th>
                        <th>Kelas</th>
                        <th width="15%">Aksi</th>
                    </tr>
                    <?php $no = 1;
                    foreach ($dataspp as $data) : ?>
                        <tr class="">
                            <td><?= $no++ ?></td>
                            <td><?= $data['nisn'] ?></td>
                            <td><?= $data['nis'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['no_telp'] ?></td>
                            <td><?= $data['tahun'] ?></td>
                            <td><?= $data['nama_kelas'] ?></td>
                            <td>
                                <a href="datasiswaedit.php?id=<?= $data['nisn'] ?>" class="button bg-yellow">Edit</a>
                                <a href="datasiswahapus.php?id=<?= $data['nisn'] ?>" onclick=" return confirm('Yakin Menghapus Data ?')" class="button bg-red">Hapus</a>
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