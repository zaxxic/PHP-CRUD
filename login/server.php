<?php 
// mengaktifkan session php

if(isset($_POST['submit'])){


session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM users where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['id_login'] = $data['id'];
	header("location:/awal/rock/index.php");
} else {
	echo "<script>alert('password atau user anda salah	');
                        document.location.href= 'indexx.php' </script>";
	// header("location:indexx.php");
    // echo "sandi / user salah";
}
}

if(isset($_POST['register'])){
	include 'koneksi.php';
		$nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];

		$query = mysqli_query($koneksi, "INSERT INTO `projek1`.`users` (`nama`, `username`, `password`) VALUES ('".$nama."','".$username."','".$password."')");

		header('Location:indexx.php');

}
?>