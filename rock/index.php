
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
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Data Sekolah</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout" >
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    
    <nav class="navbar navbar-expand-lg navbar-light  " style="background-color:tomato ;">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Pengaturan Data Sekolah</a> <a href="logout.php" style="margin-left: 600px;color: antiquewhite;">Logout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
        
      </ul>
    </div>
  </div>
</nav>
    
    <section class="banner_section">
        <div class="banner-main">
            <img src="images/school (1).jpg" />
            <div class="container">

                <div class="text-bg relative">
                    <h1>Selamt Datang<br><span class="Perfect">Silahkan ubah data</span>
                </div>

            </div>
        </div>

    </section>

    <!-- music-box  -->
    <div class="music-box" style="background-color:rgb(19, 72, 97)">
        <div class="container" >
            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <a href="/awal/datasiswa/index.php">
                        <div class="siswa for-box" >
                        <i><img src="icon/siswa.png" style="margin-top: 17px;" width="150px"
height="150px" alt="icon"/></i>
                        <h3 >Ubah Data Siswa</h3>
                        <p style="font-size: 20px;">Dapat merubah dan menambah nama, kelas dan jurusan</p>
                    </div>
                </a>  
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <a href="/awal/dataguru/index.php">
                    <div class="guru for-box">
                        <i><img src="icon/teach.png" width="150px" height="100px" alt="icon"/></i>
                        <h3>Ubah Data Guru</h3>
                        <p style="font-size: 20px;">Dapat merubah dan menambah data kode guru,nama guru dan matapelajaran  </p>
                    </div>
                </a>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <a href="/awal/jadwal/index.php">
                    <div class="jadwal for-box mt-3" >
                        <i><img src="icon/jadwal.png"  width="150px" height="150px" alt="icon"/></i>
                        <h3>Ubah Data Jadwal Siswa</h3>
                        <p style="font-size: 20px;">Dapat merubah dan menambah jadwal siswa</p>
                    </div>
                </a>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <a href="/awal/karyawan/index.php">
                    <div class="karyawan for-box ">
                        <i><img src="icon/karyawan.png" style="margin-bottom: 20px;" width="100px" height="70px" alt="icon"/></i>
                        <h3>Ubah Data Karyawan</h3>
                        <p style="font-size: 20px;">Dapat merubah dan menambah data karyawan</p>
                    </div>
                </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-5" style="margin-left: 400px;">
                    <a href="/awal/pikettatib/index.php" >
                    <div class="piket for-box ">
                        <i><img src="icon/piket.png"width="150px" height="150px" alt="icon"/></i>
                        <h3>Ubah Data Piket Tatib</h3>
                        <p style="font-size: 20px;">Dapat merubah dan menambah jadwal piket</p>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end music-box  -->

    
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>