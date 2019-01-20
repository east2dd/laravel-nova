<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapPresetHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('map_preset_hours')) {
            Schema::create('map_preset_hours', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('map_preset_id')->index();
                $table->integer('open_period_mins');
                $table->integer('close_period_mins');
                $table->string('repeat');
                $table->boolean('wd_0')->default(false);
                $table->boolean('wd_1')->default(false);
                $table->boolean('wd_2')->default(false);
                $table->boolean('wd_3')->default(false);
                $table->boolean('wd_4')->default(false);
                $table->boolean('wd_5')->default(false);
                $table->boolean('wd_6')->default(false);
                $table->string('dates')->nullable();
                $table->json('days')->nullable();

                $table->timestampsTz();
                $table->softDeletesTz();
                $table->foreign('map_preset_id')->references('id')->on('map_presets');
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
        Schema::dropIfExists('map_preset_hours');
    }
}
