<?php
    include "koneksi.php";

    // Create
    if(isset($_POST['submit'])){
        // $id = $_POST['id'];
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $gaji = $_POST['gaji'];

        //$query = mysqli_query($koneksi, "INSERT INTO `guru` VALUES ('".$kode_guru."','".$nama."','".$mapel."')");
        $query = mysqli_query($koneksi, "INSERT INTO `projek1`.`karyawan` (`nama`, `pekerjaan`, `gaji`) VALUES ('".$nama."','".$pekerjaan."','".$gaji."')");
        header('Location:index.php');
    }

    // // Update
    
if(isset($_POST['update']))
{	
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $gaji = $_POST['gaji'];

    
    $id = $_POST['id'];
    
    
    $edit = mysqli_query($koneksi, "UPDATE karyawan SET nama = '$nama', pekerjaan='$pekerjaan',gaji='$gaji' WHERE id='$id'");
    
    header('Location:index.php');
}

    // Delete
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $delete=mysqli_query($koneksi, "DELETE FROM `karyawan` WHERE id='$id' ");
        header('Location:index.php');
        die();

    }

   
?>