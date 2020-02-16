<?php
require 'functions.php';
$query = 'SELECT * FROM spp';
$page = 'spp';
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
                <a href="dataspptambah.php" class="button open-sans bg-blue" style="float:right">Tambah Data SPP</a>
            </div>
            <div style="overflow: hidden" class="mt-1">
                <table class="table">
                    <tr>
                        <th width="5%">NO</th>
                        <th width="25%">Tahun</th>
                        <th>Nominal</th>
                        <th width="15%">Aksi</th>
                    </tr>
                    <?php $no = 1;
                    foreach ($dataspp as $data) : ?>
                        <tr class="">
                            <td><?= $no++ ?></td>
                            <td><?= $data['tahun'] ?></td>
                            <td><?= $data['nominal'] ?></td>
                            <td>
                                <a href="datasppedit.php?id=<?= $data['id_spp'] ?>" class="button bg-yellow">Edit</a>
                                <a href="dataspphapus.php?id=<?= $data['id_spp'] ?>" onclick=" return confirm('Yakin Menghapus Data ?')" class="button bg-red">Hapus</a>
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