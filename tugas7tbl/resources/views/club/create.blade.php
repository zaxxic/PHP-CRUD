<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>create table (vertical &amp; horizontal)</title>
  <link rel="stylesheet" href="{{asset('style/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<form action="{{Route('save')}}" method="POST" enctype="multipart/form-data">
		@csrf
	<input type="file" name="logo" >

	<input type="text" name="name" placeholder="Masukan nama tim" >

	<input type="text" name="asal" placeholder="Masukan Asal Club">

	<button type="submit">send</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
