<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tiket')->constrained('tiket', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *Are you using a screen reader to operate VS Code?
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hargas');
    }
}
