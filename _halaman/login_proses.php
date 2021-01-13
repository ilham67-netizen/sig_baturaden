<?php
$username   = $_POST['username'];
$pass       = md5($_POST['password']);


include 'koneksi_login.php';
session_start();
$user = mysqli_query($connect,"select * from users where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
    header("location:?halaman=edit_data");
}else
{
    header("location:?halaman=login");
}
