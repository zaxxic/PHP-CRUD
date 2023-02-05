<?php
    include "koneksi.php";

    // Create
    if(isset($_POST['submit'])){
        // $id = $_POST['id'];
        $kode_guru = $_POST['kode_guru'];
        $nama = $_POST['nama'];
        $mapel = $_POST['mapel'];

        $validasi = mysqli_query($koneksi,"SELECT * FROM guru WHERE kode_guru = '$kode_guru'");
        
        if(mysqli_num_rows($validasi) > 0){
            echo "<script>alert('GAGAL');
                        document.location.href= 'tambah_data.php' </script>";
        }else{
            $query = mysqli_query($koneksi, "INSERT INTO `projek1`.`guru` (`kode_guru`, `nama`, `mapel`) VALUES ('".$kode_guru."','".$nama."','".$mapel."')");
            if($query){
                echo "<script>alert('berhasil');
                document.location.href= 'index.php' </script>";
            }
        }
        //$query = mysqli_query($koneksi, "INSERT INTO `guru` VALUES ('".$kode_guru."','".$nama."','".$mapel."')");
        //$query = mysqli_query($koneksi, "INSERT INTO `projek1`.`guru` (`kode_guru`, `nama`, `mapel`) VALUES ('".$kode_guru."','".$nama."','".$mapel."')");

    }

    // // Update
    
if(isset($_POST['update']))
{	

    

    $kode_guru=$_POST['kode_guru'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];

    
    $id = $_POST['id'];
    $kode_guru;
    $nama;
    $mapel;
    
    $edit = mysqli_query($koneksi, "UPDATE guru SET kode_guru = '$kode_guru', nama='$nama',mapel='$mapel' WHERE id='$id'");
    
    header('Location:index.php');
}

    // Delete
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $delete=mysqli_query($koneksi, "DELETE FROM `guru` WHERE id='$id' ");
        header('Location:index.php');
        die();

    }

   
?>