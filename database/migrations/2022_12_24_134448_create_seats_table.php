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
        Schema::create('seats', function (Blueprint $table) {
            $table->id()->nullable();
            $table->foreignId('shedul_id')->constrained('routeshedules')->onDelete('cascade');
            
             //$table->foreign('id')->references('id')->on('routes');
             $table->String('busno');
             //$table->json('seat')->nullable();
             
             $table->String('seat');
             
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
        Schema::dropIfExists('seats');
    }
};
