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
        Schema::create('choice_data', function (Blueprint $table) {
            $table->id('choice_data_id');
            $table->string('booking');
            $table->string('job_card')->nullable();
            $table->string('invoice')->nullable();
            $table->string('awb')->nullable();
            $table->string('quantity');
            $table->string('ab');
            $table->string('receiver');
            $table->string('location');
            $table->string('description');
            $table->string('status');
            $table->string('truck')->nullable();
            $table->unsignedBigInteger('state');
            $table->datetimes('arrival_date');
            $table->string('boe')->nullable();
            $table->string('transfer_out')->nullable();
            $table->string('weight')->nullable();
            $table->string('value')->nullable();
            $table->string('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choice_data');
    }
};
