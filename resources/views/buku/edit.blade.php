<!DOCTYPE html>
<html>
<head>
	<!-- Bintang Piaggi Putra -->
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Edit Data Buku</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
			<form action="/buku/{{$buku -> id}}/update" method="POST">
			        	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Judul</label>
					    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Judul Buku" value="{{$buku->judul}}"> 
					   
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Pengarang</label>
					    <input name="pengarang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pengarang"value="{{$buku->pengarang}}">
					   
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Tahun Terbit</label>
					    <input name="tahun_terbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tahun Terbit"value="{{$buku->tahun_terbit}}">
					   <!-- Bintang Piaggi Putra -->
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Penerbit</label>
					    <input name="penerbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Penerbit" value="{{$buku->penerbit}}">
					   <!-- Bintang Piaggi Putra -->
					  </div>
					   <button type="submit" class="btn btn-warning">Update</button>
			        </form>
			        </div>
		</div>
	</div>
		

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Bintang Piaggi Putra -->
</body>
</html>


