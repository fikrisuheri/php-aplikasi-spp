<?php 
session_start();

if($_SESSION){
    if($_SESSION['level'] == 'admin'){

    }else{
        header('location:../index.php');
    }
}else{
    header('location:../index.php');
}

$conn = mysqli_connect('localhost','root','','ujikom_spp');
$jurusan = ['REKAYASA PERANGKAT LUNAK','TEKNIK KOMPUTER DAN JARINGAN','TEKNIK KENDARAAN RINGAN','ADMINISTRASI PERKANTORAN','AKUNTANSI KEUANGAN LEMBAGA','TEKNIK GAMBAR BANGUNAN','SENI KARAWITAN'];
function ambildata($conn,$query){
    $data = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($data)){
        $hasil[] = $row;
    }

    return $hasil;
}

function bisa($conn,$query){
    $db = mysqli_query($conn,$query);

    if($db){
        return 1;
    }else{
        return 0;
    }
}



function ambilsatubaris($conn,$query){
    $db = mysqli_query($conn,$query);
    return mysqli_fetch_assoc($db);
}
?>