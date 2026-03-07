<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
            $table->char('product_code', 6)->unique();
            $table->string('product_name');
            $table->integer('price')->unsigned();
            $table->string('unit', 6);
            $table->timestamps();

            // Index untuk performa pencarian
            $table->index('product_name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
