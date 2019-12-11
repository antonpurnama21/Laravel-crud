<?php

namespace BelajarLaravel\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$data['data_siswa'] = \BelajarLaravel\Siswa::all();
    	return view('siswa.index',$data);
    }

    public function create(Request $request)
    {
    	$insert = \BelajarLaravel\Siswa::create($request->all());
    	if ($insert == TRUE) {
    		return redirect('\siswa')->with('sukses','Data berhasil diinput!');
    	}else{
    		return redirect('\siswa')->with('gagal','Data gagal diinput!');
    	}
    	
    }

    public function update($id = null)
    {
    	$data['siswa'] = \BelajarLaravel\Siswa::find($id);
    	return view('siswa.updateForm',$data);
    }

    public function do_update(Request $request, $id = null)
    {
    	$siswa = \BelajarLaravel\Siswa::find($id);
    	$update = $siswa->update($request->all());

    	if ($update == TRUE) {
    		return redirect('\siswa')->with('sukses','Data berhasil diupdate!');
    	}else{
    		return redirect('\siswa')->with('gagal','Data gagal diupdate!');
    	}
    }

    public function delete($id = null)
    {
    	$siswa = \BelajarLaravel\Siswa::find($id);
    	$delete = $siswa->delete();

    	if ($delete == TRUE) {
    		return redirect('\siswa')->with('sukses','Data berhasil dihapus!');
    	}else{
    		return redirect('\siswa')->with('gagal','Data gagal dihapus!');
    	}
    }
}
