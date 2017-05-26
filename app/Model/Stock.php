<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model{
	
    protected 	$table = 'tb_stock';
    protected 	$primaryKey = 'id_stock';
    public 		$timestamps = false;
    
    protected $fillable = [
		'id_player', 'antalgin', 'bodrex', 'komix', 'neuralgin', 'paracetamol'
	];
}