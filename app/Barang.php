<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	protected $table = 'barang';
	public $timestamps = false;

	//kirim ke Belanja
	public function Belanja(){
		return $this ->hasMany('App\Belanja');
	}
}
