<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Masyarakat;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use File;

class PengaduanController extends Controller
{
    public function tambah()
	{
		return view('masyarakat.editTambahPengaduan');
	}

	public function store(Request $request)
	{
		$rule = [
			'isi_laporan' => 'required',
			'foto' => 'mimes:jpeg,jpg,png',
		];

		$this->validate($request,$rule);

		$input = $request->all();
		$Pengaduan = new Pengaduan;

		$id = Session::get('id');
		$masyarakat = Masyarakat::where('id_user',$id)->first();		
		$nik = $masyarakat->nik;

		$date = date("Y-m-d");

		if ($request->hasFile('foto')) {
	        $images = $request->file('foto');
	   		$filename = $images->getClientOriginalName();
			$destination = \base_path() ."/public/images";
	        $images->move($destination, $filename);          
		}else{
			return redirect('masyarakat/pengaduan/tambah'); 
		}     
        
		$Pengaduan->tgl_pengaduan = $date;
		$Pengaduan->nik = $nik;
		$Pengaduan->isi_laporan = $input['isi_laporan'];
		$Pengaduan->foto = $filename;
		$Pengaduan->status = "0";

		$statusc = $Pengaduan->save();

        if ($statusc) {            
            return redirect('masyarakat/home')->with('success');
        } else {            
            return redirect('masyarakat/home')->wirh('Error');
        }

	}

	public function edit($id_pengaduan)
	{
		$data['pengaduan'] = Pengaduan::find($id_pengaduan);
		return view('masyarakat.editTambahPengaduan',$data);
	}


	public function update(Request $request,$id_pengaduan)
	{
		$rule = [
			'isi_laporan' => 'required',
			'foto' => 'mimes:jpeg,jpg,png',
		];

		$this->validate($request,$rule);

		$input = $request->all();
		$pengaduan = Pengaduan::where('id_pengaduan',$id_pengaduan)->first();

		$date = date("Y-m-d");

		if ($request->hasFile('foto')) {
	        $images = $request->file('foto');
	   		$filename = $images->getClientOriginalName();
			$destination = \base_path() ."/public/images";
	        $images->move($destination, $filename);          

   			File::delete('images/'.$pengaduan->foto);
		}else{
			$filename = $pengaduan->foto; 
		}

		$pengaduan->tgl_pengaduan = $date;
		$pengaduan->isi_laporan = $input['isi_laporan'];
		$pengaduan->foto = $filename;

		$statusc = $pengaduan->update();

        if ($statusc) {            
            return redirect('masyarakat/home')->with('success');
        } else {            
            return redirect('masyarakat/home')->wirh('Error');
        }
	}  


	public function destroy(Request $request,$id_pengaduan)
	{

		$pengaduan = Pengaduan::where('id_pengaduan',$id_pengaduan)->first();
		File::delete('images/'.$pengaduan->foto);
		$statusc = $pengaduan->delete();

        if ($statusc) {            
            return redirect('masyarakat/home')->with('success');
        } else {            
            return redirect('masyarakat/home')->wirh('Error');
        }
	}  

}
