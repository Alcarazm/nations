<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla a conectar:
    protected $table = "continents";
    //la clave primaria de la taba:
    protected $primaryKey= "continent_id";
    //omitir campos de auditoria:
    public $timestamps =false;
    
    use HasFactory;

    //relacion entre continente y region
    public function regiones(){
        return $this->hasMany(Region::class, 'continent_id');
    }

    public function paises(){
        return $this->hasManyThrough(Region::class,Country::class, 
                                    'continent_id','region_id',
                                    'continent_id','region_id');
    }
}
