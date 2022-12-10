<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateBinariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binaries', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('target');
            $table->string('version');
            $table->integer('version_machine');
            $table->boolean('supported');
            $table->boolean('valid');
            $table->timestamps();
        });

        Artisan::call( 'db:seed', [
            '--class' => 'BinarySeeder',
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
        Schema::dropIfExists('binaries');
    }
}
