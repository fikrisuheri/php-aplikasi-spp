<?php
require 'functions.php';
$page = 'kelas';
$query = 'SELECT * FROM kelas';
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
                <a href="datakelastambah.php" class="button open-sans bg-blue" style="float:right">Tambah Data Kelas</a>
            </div>
            <div style="overflow: hidden" class="mt-1">
                <table class="table">
                    <tr>
                        <th width="5%">NO</th>
                        <th width="25%">Kelas</th>
                        <th>Program Keahlian</th>
                        <th width="15%">Aksi</th>
                    </tr>
                    <?php $no = 1;
                    foreach ($dataspp as $data) : ?>
                        <tr class="">
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_kelas'] ?></td>
                            <td><?= $data['kompetensi_keahlian'] ?></td>
                            <td>
                                <a href="datakelasedit.php?id=<?= $data['id_kelas'] ?>" class="button bg-yellow">Edit</a>
                                <a href="datakelashapus.php?id=<?= $data['id_kelas'] ?>" onclick=" return confirm('Yakin Menghapus Data ?')" class="button bg-red">Hapus</a>
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