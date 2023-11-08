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
            $table->string('job');
            $table->string('invoice');
            $table->string('awb');
            $table->string('pieces');
            $table->string('ab');
            $table->string('reciever');
            $table->string('location');
            $table->string('status');
            $table->string('trucks');
            $table->string('state');
            $table->dateTime('arrivaldate');
            $table->string('boe');
            $table->string('tranferout');
            $table->string('quantity');
            $table->string('weight');
            $table->string('value');
            $table->string('remarks');
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
