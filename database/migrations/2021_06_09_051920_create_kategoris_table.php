<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_mapel');
            $table->string('mapel', 30)->nullable();
            $table->string('kelas', 30)->nullable();
            $table->string('predikatA', 30)->nullable();
            $table->string('predikatB', 30)->nullable();
            $table->string('predikatC', 30)->nullable();
            $table->timestamps();
        });
    }
        

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategoris');
    }
}

