<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>


<div class="login-page">
  <div class="form">
    <!-- <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->

    <form class="login-form" action="server.php" method="POST">
    <form class="register-form">
	<input type="text" name="nama" placeholder="masukkan nama" required="" autofocus="">
	<input type="username" name="username" placeholder="masukkan username" required="">
	<input type="password" name="password" placeholder="masukkan password" required="">
    <button type="submit" name="register">SUBMIT</button>
    </form>
  </div>
</div>


	
    
</body>
</html>