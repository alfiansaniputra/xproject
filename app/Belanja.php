<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belanja extends Model
{
	protected $table = 'belanja';
	public $timestamps = false;

	//menerima dari Barang
	public function Barang(){
		return $this ->belongsTo('App\Barang');
	}

}
