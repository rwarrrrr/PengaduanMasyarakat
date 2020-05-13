<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Tanggapan;
use App\Pengaduan;
use App\Petugas;
use App\Masyarakat;


class TanggapanController extends Controller
{    

    public function viewTambahTanggapanPetugas($id_pengaduan)
    {
    	$data['pengaduan'] = Pengaduan::where('id_pengaduan',$id_pengaduan)->first();
    	return view('petugas.tambahTanggapan',$data);
    }

    public function viewEditTanggapanPetugas($id_pengaduan)
    {
        $data['tanggapan'] = Tanggapan::where('id_pengaduan',$id_pengaduan)->first();
        return view('petugas.editTanggapan',$data);
    }

    public function viewTambahTanggapanAdmin($id_pengaduan)
    {
        $data['pengaduan'] = Pengaduan::where('id_pengaduan',$id_pengaduan)->first();
        return view('admin.tambahTanggapan',$data);
    }

    public function viewEditTanggapanAdmin($id_pengaduan)
    {
        $data['tanggapan'] = Tanggapan::where('id_pengaduan',$id_pengaduan)->first();
        return view('admin.editTanggapan',$data);
    }



    public function store(Request $request, $id_pengaduan)
    {
    	
    	$this->validate($request,[
    		'tanggapan' => 'required|min:1'
    	]);

    	$input = $request->all();

    	$id = Session::get('id');
		$petugas = Petugas::where('id_user',$id)->first();
        
		$id_petugas = $petugas->id_petugas;
		
    	$date = date("Y-m-d");

    	$data = new Tanggapan;
    	$data->id_pengaduan = $id_pengaduan;

    	$data->tgl_tanggapan = $date;
    	$data->tanggapan = $input['tanggapan'];
    	$data->id_petugas = $id_petugas;

		$statusc = $data->save();

        if ($statusc) {
            $upStat = Pengaduan::where('id_pengaduan',$id_pengaduan)->first();        
            $upStat->status = 'selesai';

            $statusd = $upStat->update();

            if ($statusd) {
                if (Session::get('level') == 'admin') {
                    return redirect('admin/tanggapan')->with('success');                    
                }elseif(Session::get('level') == 'petugas'){
                    return redirect('petugas/tanggapan')->with('success');
                }else{
                    return redirect('/');
                }
            } else {
                if (Session::get('level') == 'admin') {
                    return redirect('admin/tanggapan')->with('error');                    
                }elseif(Session::get('level') == 'petugas'){
                    return redirect('petugas/tanggapan')->with('error');
                }else{
                    return redirect('/');
                }                               
            }
            
        } else {
            if (Session::get('level') == 'admin') {
                return redirect('admin/tanggapan')->with('error');                    
            }elseif(Session::get('level') == 'petugas'){
                return redirect('petugas/tanggapan')->with('error');
            }else{
                return redirect('/');
            }            
        }

    }

    public function update(Request $request,$id_pengaduan)
    {
        $this->validate($request,[
            'tanggapan' => 'required|min:1'
        ]);

        $input = $request->all();

        $id = Session::get('id');
		$petugas = Petugas::where('id_user',$id)->first();	
		$id_petugas = $petugas->id_petugas;

        $date = date("Y-m-d");

        $data = Tanggapan::where('id_pengaduan',$id_pengaduan)->first();        

        $data->tgl_tanggapan = $date;
        $data->tanggapan = $input['tanggapan'];
        $data->id_petugas = $id_petugas;

        $statusc = $data->update();
            
        if ($statusc) {
            if (Session::get('level') == 'admin') {
                return redirect('admin/tanggapan')->with('success');                    
            }elseif(Session::get('level') == 'petugas'){
                return redirect('petugas/tanggapan')->with('success');
            }else{
                return redirect('/');
            }            
        } else {
            if (Session::get('level') == 'admin') {
                return redirect('admin/tanggapan')->with('error');                    
            }elseif(Session::get('level') == 'petugas'){
                return redirect('petugas/tanggapan')->with('error');
            }else{
                return redirect('/');
            }
        }

    }


    public function destroy(Request $request,$id_tanggapan)
    {


        $data = Tanggapan::where('id_tanggapan',$id_tanggapan)->first();        
        $id = $data->id_pengaduan;
        $statusc = $data->delete();
            
        if ($statusc) {

        	$pengadu = Pengaduan::where('id_pengaduan',$id)->first();
        	$pengadu->status = '0';

        	$saveAs = $pengadu->update();

        	if ($saveAs) {
                if (Session::get('level') == 'admin') {
                    return redirect('admin/tanggapan')->with('success');                    
                }elseif(Session::get('level') == 'petugas'){
                    return redirect('petugas/tanggapan')->with('success');
                }else{
                    return redirect('/');
                }      		
        	}else{
                if (Session::get('level') == 'admin') {
                    return redirect('admin/tanggapan')->with('error');                    
                }elseif(Session::get('level') == 'petugas'){
                    return redirect('petugas/tanggapan')->with('error');
                }else{
                    return redirect('/');
                }
        	}

        } else {
            if (Session::get('level') == 'admin') {
                return redirect('admin/tanggapan')->with('error');                    
            }elseif(Session::get('level') == 'petugas'){
                return redirect('petugas/tanggapan')->with('error');
            }else{
                return redirect('/');
            }
        }        
    }


    public function prosesPost(Request $request,$id_pengaduan)
    {
        $data = Pengaduan::where('id_pengaduan',$id_pengaduan)->first();        
        $data->status = 'proses';
            
        $statusc = $data->update();

        if ($statusc) {
            if (Session::get('level') == 'admin') {
                return redirect('admin/pengaduan')->with('success');                    
            }elseif(Session::get('level') == 'petugas'){
                return redirect('petugas/home')->with('success');
            }else{
                return redirect('/');
            }
        } else {
            if (Session::get('level') == 'admin') {
                return redirect('admin/pengaduan')->with('error');                    
            }elseif(Session::get('level') == 'petugas'){
                return redirect('petugas/home')->with('error');
            }else{
                return redirect('/');
            }
        }    

    }


}
