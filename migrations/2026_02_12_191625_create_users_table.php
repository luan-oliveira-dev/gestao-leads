<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('document')->unique();
            $table->string('email')->unique();
            $table->string('telephone');

            $table->unsignedBigInteger('type_user_id');
            $table->foreign('type_user_id')
                ->references('id')
                ->on('users_types')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')
                ->references('id')
                ->on('addresses')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('status_user_id');
            $table->foreign('status_user_id')
                ->references('id')
                ->on('status_users')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
