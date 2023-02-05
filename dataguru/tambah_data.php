<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="awal/New_folder/css.css">
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
    <form action="server.php" method="POST">
        <p class="jdl">Tambah Data</p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode guru</label><br>
            <input type="text" class="form-control" name="kode_guru" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nama</label><br>
            <input type="text" class="form-control" name="nama">
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
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
    </form>
</body>

</html>