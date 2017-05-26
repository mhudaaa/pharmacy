<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model{
	
    protected 	$table = 'tb_forecast';
    protected 	$primaryKey = 'id_forecast';
    public 		$timestamps = false;
    
    protected $fillable = [
		'id_medicine', 'id_player', 'week'
	];
}