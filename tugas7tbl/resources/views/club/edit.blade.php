<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Pure CSS Table Highlight (vertical &amp; horizontal)</title>
  <link rel="stylesheet" href="{{asset('style/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<form action="{{Route('update')}}" method="POST" enctype="multipart/form-data">
        @method('put')
		@csrf
	<input type="file" name="logo" >
  <input type="hidden" name="default" value="{{$data->logo}}">


    <input type="hidden" name="id" value="{{$data->id}}">

	<input type="text" value="{{$data->name_club}}" name="name" placeholder="Masukan nama tim" >

	<input type="text" value="{{$data->asal_club}}" name="asal" placeholder="Masukan Asal Club">

	<button type="submit">send</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
