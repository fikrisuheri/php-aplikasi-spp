<?php
require 'functions.php';
$query = 'SELECT * FROM spp';
$page = 'spp';
if ($_GET['id']) {

    $query = 'SELECT * FROM spp where id_spp = ' . $_GET['id'];
    $data = ambilsatubaris($conn, $query);
}

if ($_POST) {
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    $queryedit = "UPDATE spp SET tahun='$tahun',nominal = '$nominal' WHERE id_spp = " . $_GET['id'];
    $ubah = bisa($conn, $queryedit);

    if ($ubah == 1) {
        header('location:dataspp.php');
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
                    <label for="tahun">Tahun SPP</label>
                    <input type="text" name="tahun" id="tahun" value="<?= $data['tahun'] ?>" class="form-style" required>
                    <label for="nominal">Nominal SPP</label>
                    <input type="text" name="nominal" value="<?= $data['nominal'] ?>" id="nominal" class="form-style" required>
                    <button type="submit" name="submit" class="button open-sans bg-green" style="float:right">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
    <?php require 'footer.php' ?>
</body>

</html>