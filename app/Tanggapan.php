<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $primaryKey = 'id_tanggapan';
    protected $fillable = [
    	'id_pengaduan','tgl_tanggapan','tanggapan','id_petugas'
    ];

    public function pengaduan()
    {
    	return $this->hasOne('App\Pengaduan','id_pengaduan','id_pengaduan');
    }

    public function petugas()
    {
    	return $this->hasOne('App\Petugas','id_petugas','id_petugas');
    }

    public function pengaduans()
    {
        return $this->belongsTo('App\Pengaduan','id_pengaduan','id_pengaduan');
    }

}
