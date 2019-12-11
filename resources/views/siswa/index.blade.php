@extends('layout.master')

@section('content')

  		@if(session('sukses'))
  		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@elseif(session('gagal'))
		<div class="alert alert-danger" role="alert">
		  {{session('gagal')}}
		</div>
		@endif
  		<div class="row">
  			<div class="col-6">
  				<h1>Data Siswa!</h1>
  			</div>
  			<div class="col-6">
  				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#viewmodal">
				  Tambah Data
				</button>
  			</div>
  			
			<table class="table table-bordered table-hover">
				<tr class="text-center">
					<th>NAMA DEPAN</th>
					<th>NAMA BELAKANG</th>
					<th>JENIS KELAMIN</th>
					<th>AGAMA</th>
					<th>ALAMAT</th>
					<th>AKSI</th>
				</tr>
				@foreach($data_siswa as $key)
				<tr class="text-center">
					<td>{{ $key->nama_depan }}</td>
					<td>{{ $key->nama_belakang }}</td>
					<td>{{ $key->jk }}</td>
					<td>{{ $key->agama }}</td>
					<td>{{ $key->alamat }}</td>
					<td>
						<a href="/siswa/{{$key->id}}/update" class="btn btn-warning btn-sm">Edit Form</a>
						<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaldelete{{$key->id}}">
						  Delete
						</button>
						<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#viewmodal{{$key->id}}">
				  		Edit Modal
						</button>
					</td>
				</tr>
				@endforeach
			</table>
  		</div>

  	@include('siswa.modal-add')
  	@include('siswa.modal-edit')

	<!-- Modal delete-->
	@foreach($data_siswa as $key)
	<div class="modal fade" id="modaldelete{{$key->id ?? ''}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/siswa/{{$key->id ?? ''}}/delete" method="GET">
	        {{csrf_field()}}
	        <div class="alert alert-danger" role="alert">
			  Yakin, Mau Hapus ? {{$key->nama_depan}} {{$key->nama_belakang}}
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-danger">Delete</button>
	      </div>
	  		</form>
	    </div>
	  </div>
	</div>
	@endforeach

@endsection
