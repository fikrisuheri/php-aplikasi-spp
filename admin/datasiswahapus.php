<?php 
require 'functions.php';
if($_GET['id']){
  
    $query = 'DELETE FROM siswa where nisn = ' . $_GET['id'];
    $data = bisa($conn,$query);
    if($data == 1){
        header('location:datasiswa.php');
    }else{
        echo 'Gagal Tambah Data';
    }
}
?>