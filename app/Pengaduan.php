<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $fillable = [
    	'id_pengaduan','tgl_pengaduan','nik','isi_laporan','foto','status'
    ];

    public function masyarakat()
    {
    	return $this->hasOne('App\Masyarakat','nik','nik');
    }

    public function tanggapans()
    {
    	return $this->belongsTo('App\Tanggapan','id_pengaduan','id_pengaduan');
    }    

    public function tanggapan()
    {
        return $this->hasOne('App\Tanggapan','id_pengaduan','id_pengaduan');
    }    

}