<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $guarded = [];

    protected $dates = ['date'];

    public function user(){

        //  Um único usuário é dono de um evento
        return $this->belongsTo('App\Models\User');
    }

    public function users(){
        
        //  Um único usuário pertence a vários eventos
        return $this->belongsToMany('App\Models\User');

    }
}
