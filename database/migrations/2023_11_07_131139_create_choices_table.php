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
        Schema::create('choices', function (Blueprint $table) {
            $table->id('choice_id');
            $table->string('booking');
            $table->string('job')->nullable();
            $table->string('invoice')->nullable();
            $table->string('awb')->nullable();
            $table->string('pieces')->nullable();
            $table->string('ab')->nullable();
            $table->string('reciever')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->nullable();
            $table->string('trucks')->nullable();
            $table->string('state')->nullable();
            $table->dateTime('arrivaldate');
            $table->string('boe')->nullable();
            $table->string('tranferout')->nullable();
            $table->string('quantity')->nullable();
            $table->string('weight')->nullable();
            $table->string('value')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choices');
    }
};
