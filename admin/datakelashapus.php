<?php 
require 'functions.php';
if($_GET['id']){
  
    $query = 'DELETE FROM kelas where id_kelas = ' . $_GET['id'];
    $data = bisa($conn,$query);
    if($data == 1){
        header('location:datakelas.php');
    }else{
        echo 'Gagal Tambah Data';
    }
}
?>