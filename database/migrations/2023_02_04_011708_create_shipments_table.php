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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('from_address');
            $table->unsignedBigInteger('to_address');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('cod_payment_id');
            $table->unsignedBigInteger('branch_id');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('from_address')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('to_address')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
            $table->foreign('cod_payment_id')->references('id')->on('payments')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('shipment_id');
            $table->timestamps();

            $table->foreign('shipment_id')->references('id')->on('shipments')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
};
