<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKatakanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katakanas', function (Blueprint $table) {
            $table->id();
            $table->string('katakana');
            $table->string('romaji');
            $table->string('other')->nullable();
            $table->timestamps();
        });
    }s

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('katakanas');
    }
}
