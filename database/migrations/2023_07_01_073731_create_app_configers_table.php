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
        Schema::create('app_configers', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('company_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('business_address');
            $table->string('logo')->nullable();
            $table->string('logo_text')->nullable();
            $table->string('invoice_header');
            $table->string('footer_header');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_configers');
    }
};
