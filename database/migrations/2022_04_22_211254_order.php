<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            //item detail
            $table->string('transaction_id')->nullable();
            $table->json('menu')->nullable();
            $table->unsignedInteger('total_price')->nullable();
            $table->string('payment_type')->nullable();
            $table->timestamp('transaction_time')->nullable();
            $table->string('transaction_status')->nullable();
            $table->json('va_numbers')->nullable();
            $table->string('pdf_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
