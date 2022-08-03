<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla a conectar:
    protected $table = "countries";
    //la clave primaria de la taba:
    protected $primaryKey= "country_id";
    //omitir campos de auditoria:
    public $timestamps =false;
    use HasFactory;

     //relacion con region
     public function region(){
        return $this->belongsTo(Region::class, 'region_id');
     }

      //relacion m a m con lenguage
    public function language(){
        return $this->belongsToMany(Language::class,'country_languages',  'country_id ','language_id');
    }
}
