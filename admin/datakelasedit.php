<?php
require 'functions.php';
$page = 'kelas';
if ($_GET['id']) {

    $query = 'SELECT * FROM kelas where id_kelas = ' . $_GET['id'];
    $data = ambilsatubaris($conn, $query);
    $kom = $data['kompetensi_keahlian'];
}

if ($_POST) {
    $namkel = $_POST['nama_kelas'];
    $prog = $_POST['kompetensi_keahlian'];

    $querytambah = "UPDATE kelas SET nama_kelas = '$namkel',kompetensi_keahlian='$prog' WHERE id_kelas = " . $_GET['id'];
    $simpan = bisa($conn, $querytambah);

    if ($simpan == 1) {
        header('location:datakelas.php');
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
                    <label for="nama_kelas">Nama Kelas</label>
                    <input type="text" name="nama_kelas" id="nama_kelas" value="<?= $data['nama_kelas'] ?>" class="form-style" required>
                    <label for="kompotensi_keahlian">Program Keahlian</label>
                    <select name="kompetensi_keahlian" id="kompotensi_keahlian" class="form-style">
                        <?php foreach ($jurusan as $jrs) : ?>
                            <option value="<?= $jrs ?>" <?php if ($kom == $jrs) {
                                                            echo 'selected';
                                                        } ?>><?= $jrs ?></option>
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