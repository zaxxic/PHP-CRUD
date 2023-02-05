<?php
    include "koneksi.php";

    // Create
    if(isset($_POST['submit'])){
        
        $kelas = $_POST['kelas'];
        $pelajaran = $_POST['pelajaran'];
        $jamke = $_POST['jamke'];
        $jam = $_POST['jam'];
        

        $query = mysqli_query($koneksi,"INSERT INTO `projek1`.`jadwal` (`kelas`, `pelajaran`, `jamke`, `jam`) VALUES ('".$kelas."','".$pelajaran."','".$jamke."','".$jam."')");
        header('Location:index.php');
    }

    // // Update
    
if(isset($_POST['update']))
{	
    
    $kelas = $_POST['kelas'];
    $pelajaran = $_POST['pelajaran'];
    $jamke = $_POST['jamke'];
    $jam = $_POST['jam'];
    $id = $_POST['id'];
    
    $pelajaran;
    
    
    
    $edit = mysqli_query($koneksi, "UPDATE jadwal SET kelas='$kelas',pelajaran='$pelajaran',jamke='$jamke',jam='$jam' WHERE id='$id'");
    
    header('Location:index.php');
}

    // Delete
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $delete=mysqli_query($koneksi, "DELETE FROM `jadwal` WHERE id='$id' ");
        header('Location:index.php');
        die();

    }

   
?>