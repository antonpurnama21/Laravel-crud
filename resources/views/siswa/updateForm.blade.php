@extends('layout.master')

@section('content')

  		<div class="row mt-2">
  			<div class="col-6 mb-2">
  				<h3>Edit Siswa {{$siswa->nama_depan}} {{$siswa->nama_belakang}}</h3>
  			</div>
  			<div class="col-12">
  			<form action="/siswa/{{$siswa->id}}/do_update" method="POST">
	        	{{csrf_field()}}
			  <div class="form-group row">
			    <label for="nama_depan" class="col-sm-2 col-form-label">Nama Depan</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="nama_depan" id="nama_depan" value="{{ $siswa->nama_depan }}" required>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="nama_belakang" class="col-sm-2 col-form-label">Nama Belakang</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" value="{{$siswa->nama_belakang}}">
			    </div>
			  </div>
			  <fieldset class="form-group">
			    <div class="row">
			      <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
			      <div class="col-sm-10">
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki - laki" @if($siswa->jk == 'Laki - laki') checked @endif>
			          <label class="form-check-label" for="jk">
			            Laki
			          </label>
			        </div>
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan" @if($siswa->jk == 'Perempuan') checked @endif>
			          <label class="form-check-label" for="jk">
			            Perempuan
			          </label>
			        </div>
			      </div>
			    </div>
			  </fieldset>
			  <div class="form-group row">
			    <label for="agama" class="col-sm-2 col-form-label">Pilih Agama</label>
			    <div class="col-sm-10">
			      <select id="agama" name="agama" class="form-control" required="">
			        <option value="Islam" @if($siswa->agama == 'Islam') selected @endif>Islam</option>
			        <option value="Kristen" @if($siswa->agama == 'Kristen') selected @endif>Kristen</option>
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
			    <div class="col-sm-10">
			    	<textarea class="form-control" id="alamat" name="alamat" rows="3" required="">{{$siswa->alamat}}</textarea>
				</div>
			  </div>
			  <div class="form-group row float-right">
			  	<a href="/siswa" class="btn btn-secondary mr-2">Back</a>
	        	<button type="submit" class="btn btn-primary mr-3">Save changes</button>
			  </div>
	      	</form>
	      	</div>
  		</div>
  	</div>
  	
@endsection