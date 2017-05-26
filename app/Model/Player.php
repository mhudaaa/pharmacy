<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Player extends Model{
	
    protected 	$table = 'tb_player';
    protected 	$primaryKey = 'id_player';
    public 		$timestamps = false;
    
    protected $fillable = [
		'name', 'money', 'play_date'
	];
}