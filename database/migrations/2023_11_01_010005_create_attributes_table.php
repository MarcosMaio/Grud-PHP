<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('attributes', function (Blueprint $table) {
        $table->id();
        $table->string('description')->nullable();
        $table->string('cell_phone'); // Alterei para string para evitar problemas de tipo
        $table->string('company');
        $table->foreignId('employee_id')->constrained('employees');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('attributes');
}
};