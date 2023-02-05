<?php

include_once("koneksi.php");

?>
<?php

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM `karyawan` WHERE id='$id'");

while ($karyawan = mysqli_fetch_array($query)) {
    $nama = $karyawan['nama'];
    $pekerjaan = $karyawan['pekerjaan'];
    $gaji = $karyawan['gaji'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
    <style>
        body{
            background-image: url(techandall_wallpaper_1.jpg);
            background-size: cover;
        }
        form{
            margin-left: 300px;
            margin-right: 300px;
            margin-top: 50px;
            border: 3px solid gray;
            padding: 20px;
        }
        .jdl{
            text-align: center;
            font-size: 60px;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>
    <br /><br />

    <form name="update_user" method="post" action="server.php" style="background-color: tomato;">
        <p class="jdl">Edit Data</p>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">nama</label><br>
            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">pekerjaan</label><br>
            <input type="text" class="form-control" name="pekerjaan" value="<?= $pekerjaan; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">gaji</label><br>
            <input type="text" class="form-control" name="gaji" value="<?= $gaji; ?>">
        </div>
        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
        <input type="submit" name="update" value="Update" class="btn btn-primary">
    </form>
</body>

</html>