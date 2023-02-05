<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
	


<div class="container">
	<table>
		<thead>
			<tr>
				<th>no</th>
				<th>Logo</th>
				<th>Nama Club</th>
				<th>Asal Club</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $item)
				
			
			<tr>
				<td><img width="150px" height="150px" src="img/{{$item->logo}}" alt=""> </td>
				<td>{{$item->name_club}}</td>
				<td>{{$item->asal_club}}</td>
				<td><a href="{{Route('delete',['id'=>$item->id])}}">delete</a>||<a href="">isi</a>||<a href="{{Route('edit',['id'=>$item->id])}}">edit</a></td>
			</tr>
			@endforeach
		</tbody>
		<button><a href="{{Route('create')}}">udin</a></button>
	</table>
</div>
</body>
</html>