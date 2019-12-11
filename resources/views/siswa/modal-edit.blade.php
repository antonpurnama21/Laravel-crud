@foreach($data_siswa as $key)
	<!-- Modal Edit -->
	<div class="modal fade" id="viewmodal{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/siswa/{{$key->id}}/do_update" method="POST">
	        	{{csrf_field()}}
			  <div class="form-group row">
			    <label for="nama_depan" class="col-sm-2 col-form-label">Nama Depan</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="nama_depan" id="nama_depan" value="{{$key->nama_depan}}" required>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="nama_belakang" class="col-sm-2 col-form-label">Nama Belakang</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" value="{{$key->nama_belakang}}">
			    </div>
			  </div>
			  <fieldset class="form-group">
			    <div class="row">
			      <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
			      <div class="col-sm-10">
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki - laki" @if($key->jk == 'Laki - laki') checked @endif>
			          <label class="form-check-label" for="jk">
			            Laki
			          </label>
			        </div>
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan" @if($key->jk == 'Perempuan') checked @endif>
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
			        <option value="Islam" @if($key->agama == 'Islam') selected @endif>Islam</option>
			        <option value="Kristen" @if($key->agama == 'Kristen') selected @endif>Kristen</option>
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
			    <div class="col-sm-10">
			    	<textarea class="form-control" id="alamat" name="alamat" rows="3" required="">{{$key->alamat}}</textarea>
				</div>
			  </div>
			
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>
@endforeach