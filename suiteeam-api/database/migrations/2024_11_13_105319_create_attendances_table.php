<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->foreignId('timing_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->decimal('total_hours_covered', 5, 2);
            $table->decimal('total_break_hours', 5, 2);
            $table->decimal('total_hours_worked', 5, 2);
            $table->boolean('is_late');
            $table->boolean('is_overbreak');
            $table->boolean('is_undertime');
            $table->boolean('is_absent');
            $table->timestamps();
            $table->softDeletes(); // Add soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('attendances');
    }
};
