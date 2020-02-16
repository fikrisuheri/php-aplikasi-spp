<?php
session_start();
$conn = mysqli_connect('localhost','root','','ujikom_spp');

$username = $_POST['username'];
$password = md5($_POST['password']);
$query = "SELECT * FROM petugas where username='$username' AND password = '$password'";
$row = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($row);
$cek = mysqli_num_rows($row);

if($cek > 0){
    if($data['level'] == 'admin'){
        $_SESSION['level'] = 'admin';
        $_SESSION['username'] = $data['username'];
        $_SESSION['user_id'] = $data['id_petugas'];
        header('location:admin/dashboard.php');
    }else{
        $_SESSION['level'] = 'petugas';
        $_SESSION['username'] = $data['username'];
        $_SESSION['user_id'] = $data['id_petugas'];
        header('location:petugas/dashboard.php');
    }
}else{

}
?>