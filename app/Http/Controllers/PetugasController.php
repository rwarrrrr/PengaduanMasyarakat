<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Tanggapan;

class PetugasController extends Controller
{
    public function indexPetugas()
    {
        $data['tanggapan'] = Pengaduan::where('status',"!=","selesai")->get();
        return view('petugas.home',$data); 
    }


    public function viewTanggapan()
	{		
		$data['tanggapan1'] = Tanggapan::get();
		return view('petugas.homeTanggapan',$data);
	}

}
