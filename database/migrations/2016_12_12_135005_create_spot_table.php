<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('spot_code')->unique();
            $table->integer('travel_id');
            $table->time('visit_time');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('spot_name');
            $table->string('site_url');
            $table->integer('stay_minute');
            $table->string('category_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('spot');
    }
}
