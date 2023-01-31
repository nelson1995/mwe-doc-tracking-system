<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_track', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('track_id')->unsigned()->nullable();
            $table->foreign('track_id')->references('id')->on('tracks')->onDelete('cascade');
            $table->unsignedBigInteger('office_id')->unsigned()->nullable();
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');
            $table->integer('sequence');
            $table->boolean('is_current')->default(false);
            $table->boolean('is_complete')->default(false);            
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
        Schema::dropIfExists('office_track');
    }
}
