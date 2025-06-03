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
        Schema::create('customizes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['tower', 'bouquet']);
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable();
            $table->foreignId('snack_id_1')->nullable()->constrained('snacks')->nullOnDelete();
            $table->foreignId('snack_id_2')->nullable()->constrained('snacks')->nullOnDelete();
            $table->foreignId('snack_id_3')->nullable()->constrained('snacks')->nullOnDelete();
            $table->foreignId('snack_id_4')->nullable()->constrained('snacks')->nullOnDelete();
            $table->enum('layer', [2, 3, 4]);
            $table->foreignId('decoration_id_1')->nullable()->constrained('decorations')->nullOnDelete();
            $table->foreignId('decoration_id_2')->nullable()->constrained('decorations')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customizes');
    }
};
