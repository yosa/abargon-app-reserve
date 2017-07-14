<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {            
            $table->increments('id');
            $table->char('idIdentityCreated', 36);
            $table->string('name')->unique();
            $table->text('description');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            /* destacado */
            $table->boolean('outstanding')->default(0);
            $table->boolean('finalized')->default(0);
            $table->boolean('exhausted')->default(0);
            $table->smallInteger('maximumCapacity');
            $table->smallInteger('totalReservations')->default(0);
            $table->dateTime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->char('idIdentityUpdated', 36)->nullable();
            $table->char('idPhoto', 36)->nullable();
            $table->dateTime('updatedAt')->nullable();
            $table->dateTime('exhaustedDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
