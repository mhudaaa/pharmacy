<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Order extends Model{
	
    protected 	$table = 'tb_order';
    protected 	$primaryKey = 'id_order';
    public 		$timestamps = false;
    
    protected $fillable = [
		'id_medicine', 'id_player', 'quantity', 'week'
	];
}