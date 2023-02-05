
<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:/awal/login/indexx.php");
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .edit {
            color: tomato;
            text-transform: uppercase;
            text-decoration: none;
        }

        .hapus {
            color: red;
            text-transform: uppercase;
            text-decoration: none;
        }
        b{
            text-decoration: none;

        }
    </style>

</head>

<body>
    <h1 align="center">Data Jadwal Siswa</h1>
    
    <table class="table table-danger table-striped-columns">

        <thead>
            <tr>
                <th>NO</th>
                <th>kelas</th>
                <th>pelajaran</th>
                <th>jamke</th>
                <th>jam</th>

                <th colspan="2" style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * from jadwal WHERE 1");
$id = 1;
while ($jadwal = mysqli_fetch_array($query)) {
    ?>
                <tr class="table-primary">
                    <td><?=$id++?></td>
                    <td><?= $jadwal['kelas'] ?></td>
                    <td><?= $jadwal['pelajaran'] ?></td>
                    <td><?= $jadwal['jamke'] ?></td>
                    <td><?= $jadwal['jam'] ?></td>
                    <td>
                        
                        <a class="edit" href='edit.php?id= <?= $jadwal['id'] ?>'><b style="text-decoration : none;">Edit</b></a>
                    </td>
                    <td>
                        <a class="hapus" href='server.php?id= <?= $jadwal['id'] ?>'><b style="text-decoration : none;">Hapus</b></a>
                        
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        
        
    </table>

    <div class="bttn" >
        <a href="tambah_data.php"><button class="btn btn-success"style="margin-left: 560px; margin-top: 50px; margin-bottom: 10px; ">Tambah Data</button></a>
    <a href="/awal/rock/index.php"><button class="btn btn-success"style="margin-left:10px; margin-top: 50px; margin-bottom: 10px; ">Halaman Utama</button></a>
    </div>

    </body>

</html>