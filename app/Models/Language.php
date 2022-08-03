<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //la tabla a conectar:
    protected $table = "languages";
    //la clave primaria de la taba:
    protected $primaryKey= "language_id";
    //omitir campos de auditoria:
    public $timestamps =false;

    use HasFactory;

    //relacion m a m con países
    public function paises(){
        return $this->BelongsToMany(Country::class,'country_languages',
                                                    'language_id','country_id');
    }
}
