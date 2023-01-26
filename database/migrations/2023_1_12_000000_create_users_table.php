<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('ownership_id')->default(1);
            $table->foreign('ownership_id')->references('id')->on('ownerships')->cascadeOnDelete();
            $table->unsignedBigInteger('role_id')->default(1);
            $table->foreign('role_id')->references('id')->on('roles')->cascadeOnDelete();
            $table->string('hardware_uuid')->nullable();
            $table->string('computer_name')->nullable();
            $table->string('activity')->default('inactivity');
            $table->string('status')->default('unverified');
            $table->string('image')->nullable();
            $table->date('expired')->default(now()->addDays(30));
            $table->date('created_date')->default(now());
            $table->timestamp('recent_login')->useCurrent();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Artisan::call( 'db:seed', [
            '--class' => 'UserSeeder',
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
        Schema::dropIfExists('users');
    }
}
