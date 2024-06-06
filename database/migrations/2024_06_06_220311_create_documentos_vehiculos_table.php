<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_documento_servicio')->nullable();
            $table->unsignedBigInteger('id_vehiculos')->nullable();
            $table->foreign("id_documento_servicio")->references("id")->on("documentos_servicios")->onUpdate("cascade");
            $table->foreign("id_vehiculos")->references("id")->on("vehiculos")->onUpdate("cascade");
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('documentos_vehiculos');
    }
};