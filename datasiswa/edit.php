<?php

include_once("koneksi.php");

?>
<?php

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM `siswa` WHERE id='$id'");

while ($siswa = mysqli_fetch_array($query)) {
    $nama = $siswa['nama'];
    $kelas = $siswa['kelas'];
    $jurusan = $siswa['jurusan'];
    $kelamin = $siswa['kelamin'];
    $gambar = $siswa['gambar'];
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

    <form method="POST" action="server.php" enctype="multipart/form-data" style="background-color: tomato;">
        <p class="jdl">Edit Data Siswa</p>
        <div class="mb-3" >
            <div class="mb-3" >
                <label for="exampleInputEmail1" class="form-label">Nama</label><br>
                <input type="text" class="form-control" name="nama" value="<?= $nama; ?>">
            </div>
            <select name="kelas">
            <option value="<?=$kelas; ?>"><?= $kelas ?></option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
            </div>
        <div class="mb-3">
          <label for="">Jurusan</label>
          <select name="jurusan">
          <option  value="<?= $jurusan; ?>"> <?= $jurusan; ?> </option>
            <option value="RPL">RPL</option>
            <option value="multimedia">Multimedia</option>
            <option value="TKJ">TKJ</option>
            <option value="cybersecurity">cyber security</option>
            <option value="TEI">TEI</option>
          </select>
          
          <div class="mb-3">
            <input type="radio" id="kelamin" name="kelamin" value="laki" <?= ($kelamin == 'laki') ? 'checked' : '' ?>>laki

            <input type="radio" id="kelamin" name="kelamin" value="perempuan" <?= ($kelamin == 'perempuan') ? 'checked' : '' ?>>cewe

        </div>

        <div class="mb-3">
        <b>Uploud File</b> <input type="file" name="NamaFile">
        
        <input type="submit" name="update" value="update" class="btn btn-primary">
        
        </div>
        </div>
        <img src="gambar/<?= $gambar?>"  width="100px" height="100px"  alt="">
        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
        <input type="hidden" value="<?= $gambar?>" name="deafault">
    </form>
</body>

</html>