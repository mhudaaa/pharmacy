<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model{
    protected $table = 'tb_orders';
    protected $primaryKey = 'id_orders';
    public $timestamps = false;
    
    protected $fillable = [
		'id_obat', 'jumlah'
	];
}