<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
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
    <form action="server.php" method="POST" enctype="multipart/form-data">
        <p class="jdl">Tambah Data</p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label><br>
            <input type="text" class="form-control" name="nama">
        </div>
        <label for="">kelas</label>
        <select name="kelas">
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          
        <div class="mb-3">
            <br>
          <label for="">jurusan</label>
          <select name="jurusan">
            <option value="RPL">RPL</option>
            <option value="multimedia">Multimedia</option>
            <option value="TKJ">TKJ</option>
            <option value="cybersecurity">cyber security</option>
            <option value="TEI">TEI</option>
          </select>
        </div>

        <div class="mb-3">
            <input type="radio" name="kelamin" value="laki">laki-laki
            <input type="radio" name="kelamin" value="perempuan">perempuam
        </div>

        

        <b>Uploud Gambar </b> <input type="file" name="NamaFile">
        

        
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        
    </form>
</body>

</html>