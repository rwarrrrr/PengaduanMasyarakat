<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Masyarakat;
use App\Tanggapan;
use Illuminate\Support\Facades\Session;

class MasyarakatController extends Controller
{
    public function indexMasyarakat()
    {
    	$id = Session::get('id');
		$masyarakat = Masyarakat::where('id_user',$id)->first();	
		$nik = $masyarakat->nik;	

    	$data['pengaduan'] = Pengaduan::where([
    		['nik',$nik],
    		['status',"!=","selesai"]
    	])->get();
        return view('masyarakat.home',$data);                    		
    }
    
    public function viewTanggapan()
    {
        $id = Session::get('id');
        $masyarakat = Masyarakat::where('id_user',$id)->first();    
        $nik = $masyarakat->nik;   

        $data['tanggapan'] = Pengaduan::where([
            ['nik',$nik],
            ['status',"selesai"]
        ])->get();

        return view('masyarakat.homeTanggapan',$data);
    }

}
