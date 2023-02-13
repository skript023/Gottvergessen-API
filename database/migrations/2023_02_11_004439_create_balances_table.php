<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->default(1);
            $table->bigInteger('bank')->default(0);
            $table->bigInteger('cash')->default(0);
            $table->bigInteger('emoney')->default(0);
            $table->bigInteger('gopay')->default(0);
            $table->bigInteger('ovo')->default(0);
            $table->bigInteger('dana')->default(0);
            $table->bigInteger('link_aja')->default(0);
            $table->bigInteger('shopee_pay')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });

        Artisan::call( 'db:seed', [
            '--class' => 'BalanceSeeder',
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
        Schema::dropIfExists('balances');
    }
}
