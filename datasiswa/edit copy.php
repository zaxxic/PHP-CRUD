<?php

include_once("koneksi.php");

?>
<?php

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM `guru` WHERE id='$id'");

while ($guru = mysqli_fetch_array($query)) {
    $kode_guru = $guru['kode_guru'];
    $nama = $guru['nama'];
    $mapel = $guru['mapel'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/New_folder/css.css">
    
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
        <p class="jdl">Edit Data Guru</p>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kode guru</label><br>
            <input type="text" class="form-control" name="kode_guru" value="<?php echo $kode_guru; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label><br>
            <input type="text" class="form-control" name="nama" value="<?= $nama; ?>">
        </div>
        <div class="mb-3">
          <label for="">Mapel</label>
          <select name="mapel">
            <option value="Matematika">Matematika</option>
            <option value="BHS Indonesia">BHS Indonesia</option>
            <option value="BHS Inggis">BHS Inggis</option>
            <option value="PPKn">PPKn</option>
            <option value="Agama">Agama</option>
            <option value="Sejarah">Sejarah</option>
            <option value="Kimia">Kimia</option>
            <option value="Fisika">Fisika</option>
          </select>
        </div>
        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
        <input type="submit" name="update" value="Update" class="btn btn-primary">
    </form>
</body>

</html>