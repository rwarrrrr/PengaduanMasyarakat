<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Pengaduan;
use App\Tanggapan;
use App\Masyarakat;
use App\Petugas;
use PDF;

class AdminController extends Controller
{
    public function indexAdmin()
    {
        $data['admin'] = Petugas::where('level','admin')->count();
        $data['petugas'] = Petugas::where('level','petugas')->count();
        $data['masyarakat'] = Masyarakat::count();
        $data['pengaduan'] = Pengaduan::where('status','!=','selesai')->count();
        $data['pengaduanSelesai'] = Pengaduan::where('status','selesai')->count();
        $data['tanggapan'] = Tanggapan::count();
    	return view('admin.home',$data);
    }

    public function jumlahCetakPost()
    {
        $data['admin'] = Petugas::where('level','admin')->count();
        $data['petugas'] = Petugas::where('level','petugas')->count();
        $data['masyarakat'] = Masyarakat::count();
        $data['pengaduan'] = Pengaduan::where('status','!=','selesai')->count();
        $data['pengaduanSelesai'] = Pengaduan::where('status','selesai')->count();
        $data['tanggapan'] = Tanggapan::count();
        
        $pdf = PDF::loadview('admin.cetakJumlah',$data);
        return $pdf->download('laporan-jumlah-data-pdf');        
    }

    public function viewMasyarakat()
    {
    	$data['masyarakat'] = Masyarakat::all();
    	return view('admin.homeMasyarakat',$data);	
    }

    public function masyarakatCetakPost()
    {
        $data['masyarakat'] = Masyarakat::all();
 
        $pdf = PDF::loadview('admin.cetakMasyarakat',$data);
        return $pdf->download('laporan-data-masyarakat-pdf');
    }

    public function viewPengaduan()
    {
    	$data['pengaduan'] = Pengaduan::where('status',"!=","selesai")->get();
    	$data['pengaduanSelesai'] = Pengaduan::where('status',"selesai")->get();
    	return view('admin.homePengaduan',$data);
    }

    public function pengaduanCetakPost()
    {
    	$data['pengaduan'] = Pengaduan::where('status',"!=","selesai")->get();
 
    	$pdf = PDF::loadview('admin.cetakPengaduan',$data);
    	return $pdf->download('laporan-pengaduan-pdf');
    }

    public function pengaduanSelesaiCetakPost()
    {
        $data['pengaduanSelesai'] = Pengaduan::where('status',"selesai")->get();

        $pdf = PDF::loadview('admin.cetakPengaduanSelesai',$data);
        return $pdf->download('laporan-pengaduan-selesai-pdf');
    }

    public function viewPetugas()
    {
    	$data['petugas'] = Petugas::all();
    	return view('admin.homePetugas',$data);
    }

    public function petugasCetakPost()
    {
        $data['petugas'] = Petugas::all();
 
        $pdf = PDF::loadview('admin.cetakPetugas',$data);
        return $pdf->download('laporan-data-petugas-pdf');
    }

    public function viewTanggapan()
    {
    	$data['tanggapan'] = Tanggapan::get();
    	return view('admin.homeTanggapan',$data);
    }

    public function tanggapanCetakPost()
    {
        $data['tanggapan'] = Tanggapan::get();
 
        $pdf = PDF::loadview('admin.cetakTanggapan',$data);
        return $pdf->download('laporan-tanggapan-pdf');
    }

}
