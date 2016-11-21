<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table ='rides';
    protected $fillable = [
        'name_ride', 'idUser', 'start','end','descripcion','hour_start','hour_end','activo'
    ];
    protected $guarded = ['id'];

    
} 
