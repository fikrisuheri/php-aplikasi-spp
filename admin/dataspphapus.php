<?php 
require 'functions.php';
if($_GET['id']){
  
    $query = 'DELETE FROM spp where id_spp = ' . $_GET['id'];
    $data = bisa($conn,$query);
    if($data == 1){
        header('location:dataspp.php');
    }else{
        echo 'Gagal Tambah Data';
    }
}
?>