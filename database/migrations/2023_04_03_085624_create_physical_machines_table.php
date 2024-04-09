<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicalMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_machines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ip');
            $table->string('so');
            $table->string('diskSpace');
            $table->string('memory');
            $table->string('cpu');
            $table->string('autoRestart');
            $table->string('storage');
            $table->string('clienttype');
            $table->string('status');
            $table->string('interprise');
            $table->unsignedBigInteger('fk_hacks_id');
            $table->foreign('fk_hacks_id')->references('id')->on('hacks')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->softDeletes();
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
        Schema::dropIfExists('physical_machines');
    }
}
