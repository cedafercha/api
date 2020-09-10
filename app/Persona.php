<?php

namespace App;
use App\TipoDocumento;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //especificar el nombre de la tabla
    protected $table='personas';
    //especificar el nombre del campo primario
    protected $primary_key='id';
    //especificar que los campos created_at y update_at se van a usar
    public $timestamps='true';

    protected $hidden = ['created_at','updated_at'];
    
    public function  tipo_documento(){
        return $this->belongsTo(TipoDocumento::class,'tipo_documento_id','id');
    }
}
