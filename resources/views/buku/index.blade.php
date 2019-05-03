<!DOCTYPE html>
<html>
<!-- Bintang Piaggi Putra -->
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-6">
			<h1>Buku</h1>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
			  Tambah Data Buku
			</button>
			<!-- Bintang Piaggi Putra -->
		
			</div>


			<table class="table" >
			<tr>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>Tahun Terbit</th>
				<th>Penerbit</th>
				<th>Aksi</th>
			</tr>

			@foreach($data_buku as $buku)
			<tr>
				<td>{{$buku -> judul}}</td>
				<td>{{$buku -> pengarang}}</td>
				<td>{{$buku -> tahun_terbit}}</td>
				<td>{{$buku -> penerbit}}</td>
				<td>
					<a href="/buku/{{$buku->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
					<a href="/buku/{{$buku->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau dihapus ? ')">Delete</a>
				</td>
			</tr>
			@endforeach
			</table>
		</div>
	</div>
		<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="/buku/create" method="POST">
			        	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Judul</label>
					    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Judul Buku">
					   
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Pengarang</label>
					    <input name="pengarang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pengarang">
					   
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Tahun Terbit</label>
					    <input name="tahun_terbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tahun Terbit">
					   
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Penerbit</label>
					    <input name="penerbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Penerbit">
					   
					  </div>

					  
					  
					
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


