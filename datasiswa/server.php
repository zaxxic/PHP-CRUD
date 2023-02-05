<?php
    include "koneksi.php";

    // Create
    if(isset($_POST['submit'])){
        
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $kelamin = $_POST['kelamin'];
        $gambar = $_POST['gambar'];
        $gambar = upload_gambar();
        
 
        
        

        $query = mysqli_query($koneksi,"INSERT INTO `projek1`.`siswa` (`nama`, `kelas`, `jurusan`,`kelamin`,`gambar`) VALUES ('".$nama."','".$kelas."','".$jurusan."','".$kelamin."','".$gambar."')");
                                                    
        
        header('Location:index.php');
        
        //coba

        // if($jurusan == "RPL"){
        //     $jumlahs = 49;    
        // }else if($jurusan == "TKJ"){
        //     $jumlahs = 13;
        // };

        //end coba
        
        
    };

    //uploud
function upload_gambar(){
    global $koneksi;
    $direktori="gambar/";
    $file_name=$_FILES['NamaFile']['name'];
    $tmp = $_FILES['NamaFile']['tmp_name'];
    move_uploaded_file($tmp,$direktori.$file_name);
    return $file_name;
}
    // // Update
    
    $validasi = mysqli_query($koneksi,"SELECT * FROM siswa WHERE gambar = '$gambar'");

if(isset($_POST['update']))
{	


    // if ($_FILES['NamaFile'] == null) {
    // $id = $_POST['id'];
    // $nama = $_POST['nama'];
    // $kelas = $_POST['kelas'];
    // $jurusan = $_POST['jurusan'];
    // $kelamin = $_POST['kelamin'];
    // $gambar = $_POST['gambar'];

    
        
    //     mysqli_query($koneksi, "UPDATE siswa SET  nama='$nama',kelas='$kelas',jurusan='$jurusan',kelamin='$kelamin' WHERE id='$id'");
    //     header('Location:index.php');
    // }else{
    //     $id = $_POST['id'];
    //     $nama = $_POST['nama'];
    //     $kelas = $_POST['kelas'];
    //     $jurusan = $_POST['jurusan'];
    //     $kelamin = $_POST['kelamin'];
    //     $gambar = $_POST['gambar'];
    //     $gambar = upload_gambar();
    //     mysqli_query($koneksi, "UPDATE siswa SET  nama='$nama',kelas='$kelas',jurusan='$jurusan',kelamin='$kelamin',gambar='$gambar' WHERE id='$id'");
    //     header('Location:index.php');
    // }
        if ($_FILES['NamaFile']['name'] == "") {
            $gambar =$_POST['deafault'];
        }else{
            $gambar =$_POST['NamaFile'];
            $gambar =upload_gambar();
        }

  
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $kelamin = $_POST['kelamin'];
    
    $absen;
    $nama;
    $kelas;
    $jurusan;
    $gambar;
    $alamat;
    mysqli_query($koneksi, "UPDATE siswa SET  nama='$nama',kelas='$kelas',jurusan='$jurusan',kelamin='$kelamin',gambar='$gambar' WHERE id='$id'");
    header('Location:index.php');

    
    
    
    
}

    // Delete
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $delete=mysqli_query($koneksi, "DELETE FROM `siswa` WHERE id='$id' ");
        header('Location:index.php');
        die();

    }

   
?>