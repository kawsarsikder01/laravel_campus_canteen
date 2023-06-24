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
        Schema::create('invoiceitems', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('sub_total')->nullable();
            $table->string('total')->nullable();
            $table->string('price')->nullable();
            $table->string('qty')->nullable();
            // $table->unsignedBigInteger('invoice_id');
            // $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoiceitems');
    }
};
