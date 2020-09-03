<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    /**
     * Para especificar el nombre de la tabla
     */
    protected $table = 'personas';
    /**
     * Para especificar nombre del campo primary key
     */
    protected $primary_key = 'id';
    /**
     * Para especificar que los campos created_at y updated_at se van a utilizar
     */
    public $timestamps = true;
    /**
     * Para esconder las columnas de created_at y updated_at
     */
    protected $hidden = ['created_at', 'updated_at'];
}
