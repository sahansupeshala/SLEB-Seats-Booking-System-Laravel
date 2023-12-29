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
        Schema::create('routeshedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bus_id')->constrained('buses');
            $table->string('Bus_no');
            $table->date('Date');
            $table->string('Route_no');
            $table->string('Tikcet');
            $table->string('Departure_City');
            $table->time('Departure_time');
            $table->string('Arrival_city');
            $table->time('Arrival_time');
          
            
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
        Schema::dropIfExists('routeshedules');
    }
};
