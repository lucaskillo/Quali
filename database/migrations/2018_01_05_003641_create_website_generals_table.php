<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_generals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('counter1_name');
            $table->integer('counter1_value');
            $table->string('counter2_name');
            $table->integer('counter2_value');
            $table->string('counter3_name');
            $table->integer('counter3_value');
            $table->text('who_we_are');
            $table->text('mission');
            $table->text('processes');
            $table->text('how_we_work');
            $table->text('what_we_do');
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
        Schema::dropIfExists('website_generals');
    }
}
