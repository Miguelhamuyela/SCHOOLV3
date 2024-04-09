<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeeamBackupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veeam_backups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('machineIp');
            $table->unsignedBigInteger('fk_virtual_machines_id');
            $table->foreign('fk_virtual_machines_id')->references('id')->on('virtual_machines')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('veeam_backups');
    }
}
