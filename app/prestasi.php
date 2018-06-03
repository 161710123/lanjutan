<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $fillable = array('nama','keterangan','id_eskul','id_jurusan');

    public function eskul()
    {
    	return $this->hasMany('App\eskul','id_eskul');
    }
    public function jurusan()
    {
    	return $this->hasMany('App\jurusan','id_jurusan');
    }
}
