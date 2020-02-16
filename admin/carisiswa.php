<?php
require 'functions.php';

$page  = 'transaksi';

if ($_GET) {
    $q = "SELECT * FROM siswa WHERE nis = " . $_GET['nis'];
    $cari = ambilsatubaris($conn,$q);

    if($cari){
        header('location:pembayaran.php?id='.$_GET['nis']);
    }else{
        echo "<script>alert('NIS Tidak Ditemukan')</script>";
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
                <form action="" method="GET">
                    <label for="nominal">Cari Siswa Berdasarkan NIS</label>
                    <input type="number" name="nis" id="nis" class="form-style" required>
                    <button type="submit" name="submit" class="button open-sans bg-green" style="float:right">Cari</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>