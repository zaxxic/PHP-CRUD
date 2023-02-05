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
		<select name="club" id="">
		@foreach ($data as $item)
			<option value="">{{$club}}</option>
		@endforeach
		
			
		</select>

	<input type="text" name="name" >

	<input type="text" name="posisi" placeholder="Masukan Posisi Pemain" >

	<input type="number" name="number" placeholder="Masukan Nomer punggung" >
	
	<input type="text" name="asal" placeholder="Masukan pemain">

	<button type="submit">send</button>
</form>
</div>
<!-- partial -->
  
</body>
</html>
