<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateOwnershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownerships', function (Blueprint $table) {
            $table->id();
            $table->string('ownership');
            $table->unsignedBigInteger('price')->default(0);
            $table->string('subscription_type')->default('monthly');
            $table->timestamps();
        });

        Artisan::call( 'db:seed', [
            '--class' => 'OwnershipSeeder',
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
        Schema::dropIfExists('ownerships');
    }
}
