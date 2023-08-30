<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateRestrictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restrictions', function (Blueprint $table) {
            $table->id();
            $table->string('route');
            $table->string('type');
            $table->unsignedBigInteger('level')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->cascadeOnDelete();
            $table->foreign('level')->references('id')->on('access_levels')->cascadeOnDelete();
            $table->timestamps();
        });

        /*
        Artisan::call( 'db:seed', [
            '--class' => 'RestrictionRoute',
            '--force' => true ]
        );
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restrictions');
    }
}
