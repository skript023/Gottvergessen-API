<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_monitors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id')->default(1);
            $table->foreign('owner_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('prefix')->nullable();
            $table->string('owner')->nullable();
            $table->string('file')->nullable();
            $table->integer('line')->nullable();
            $table->string('message')->nullable();
            $table->timestamps();
        });

        Artisan::call( 'db:seed', [
            '--class' => 'ClientMonitor',
            '--force' => true ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_monitors');
    }
}
