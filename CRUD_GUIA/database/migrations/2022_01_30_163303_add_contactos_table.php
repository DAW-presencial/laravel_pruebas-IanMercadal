<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();

            $table->string('nombre')->unique(); // Text
            $table->date('nacimiento')->nullable(); // Date
            $table->integer('telefono')->unique(); // Integer
            $table->string('aficion')->nullable(); // Select
            $table->string('sexo')->nullable(); // radiobutton
            $table->string('descripcion'); // textarea
            $table->boolean('terminos')->default(false); // checkbox
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
