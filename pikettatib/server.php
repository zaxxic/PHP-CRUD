<?php
    include "koneksi.php";

    // Create
    if(isset($_POST['submit'])){
        
        $hari = $_POST['hari'];
        $nama = $_POST['nama'];
        $jam = $_POST['jam'];
        

        $query = mysqli_query($koneksi,"INSERT INTO `projek1`.`pikettatib` (`hari`, `nama`, `jam`) VALUES ('".$hari."','".$nama."','".$jam."')");
        header('Location:index.php');
    }

    // // Update
    
if(isset($_POST['update']))
{	
    
    $hari = $_POST['hari'];
    $nama = $_POST['nama'];
    $jam = $_POST['jam'];
    
    
    $id = $_POST['id'];
    
    
    $edit = mysqli_query($koneksi, "UPDATE pikettatib SET  hari='$hari',nama='$nama',jam='$jam' WHERE id='$id'");
    
    header('Location:index.php');
}

    // Delete
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $delete=mysqli_query($koneksi, "DELETE FROM `pikettatib` WHERE id='$id' ");
        header('Location:index.php');
        die();

    }

   
?>