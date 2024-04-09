<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('memory');
           /// $table->longText('space');
          //  $table->string('so');
          //  $table->longText('focalPoint');
            $table->string('tel');
           // $table->longText('applicationName');
           // $table->string('cpu');
           // $table->string('deprtfocalPoint');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitions');
    }
}
