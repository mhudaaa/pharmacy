<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model{
	
    protected 	$table = 'tb_medicine';
    protected 	$primaryKey = 'id_medicine';
    public 		$timestamps = false;
    
    protected $fillable = [
		'medicine', 'expired_date'
	];
}