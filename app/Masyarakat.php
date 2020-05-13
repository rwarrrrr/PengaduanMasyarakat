<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = 'masyarakat';
    protected $primaryKey = 'nik';
    protected $fillable = [
    	'id_user','nama','username','password','telp'
    ];

    public function pengaduan()
    {
    	return $this->hasMany('App\Pengaduan','nik','nik');
    }

}
