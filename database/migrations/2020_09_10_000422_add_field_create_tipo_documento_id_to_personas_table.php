<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldCreateTipoDocumentoIdToPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('personas')){
            Schema::table('personas', function (Blueprint $table) {
                if(!Schema::hasColumn('personas', 'tipo_documento_id')){
                    $table->integer('tipo_documento_id')->after('apellido');
                };
                if(!Schema::hasColumn('personas', 'numero_documento')){
                    $table->integer('numero_documento')->after('tipo_documento_id');
                };
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('personas')){
            Schema::table('personas', function (Blueprint $table) {
                if(Schema::hasColumn('personas', 'tipo_documento_id')){
                    $table->dropColumn('tipo_documento_id');
                };
                if(Schema::hasColumn('personas', 'numero_documento')){
                    $table->dropColumn('numero_documento');
                };
            });
        }
    }
}
