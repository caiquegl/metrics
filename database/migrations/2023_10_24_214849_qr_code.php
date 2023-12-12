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
        Schema::create('qr_code', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 255);
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('company_id')->constrained('companies');
            $table->timestamp('last_open_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_code');
    }
};
