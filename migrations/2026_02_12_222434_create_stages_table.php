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
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');

            $table->unsignedBigInteger('funnel_id');
            $table->foreign('funnel_id')
                ->references('id')
                ->on('funnels')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('status_stage_id');
            $table->foreign('status_stage_id')
                ->references('id')
                ->on('status_stages')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
