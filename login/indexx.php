

<html>
<head>
	<title>Form Login Gilacoding</title>
</head>
<body>

<div class="login-page">
  <div class="form">
	<link rel="stylesheet" href="css.css">
    <!-- <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->

    <form class="login-form" action="server.php" method="POST">
      <input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
      <input type="password" name="password" placeholder="masukkan password" required="">
      <button type="submit" name="submit">LOGIN</button>
      <p class="message">Not registered? <a href="regis.php">Create an account</a></p>
    </form>
  </div>
</div>

	<!-- <center>
	<form action="server.php" method="POST" style="margin-top: 200px;">
		<h1>Login</h1>
		<label>Username :</label>
		<input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
		<br/>
		<br/>
		<label>Password :</label>
		<input type="password" name="password" placeholder="masukkan password" required="">
		<br>
		<br>
		<button type="submit" name="submit">LOGIN</button> <button><a href="register.php" style="text-decoration: none;color:black;">Register</a></button>
		
	</form> -->

</body>
</html>