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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Email');
            $table->VARCHAR('PhoneNumber');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->integer('NumberMin5');
            $table->integer('NumberMax8');
            $table->integer('WholeNumber');
            $table->integer('MaxWhole');
            $table->integer('NumRange');
            $table->string('Insta');
            $table->string('picture')->fillable();
            $table->foreignId('user_id')->constrained;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
