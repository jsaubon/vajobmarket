<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientBillingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_billing_details', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->unsigned();
            $table->string('card_number')->nullable();
            $table->string('cart_type')->nullable();
            $table->string('exp_date')->nullable();
            $table->string('cardholder_name')->nullable();
            $table->string('cvv')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_zip')->nullable();
            $table->string('billing_country')->nullable();
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
        Schema::dropIfExists('client_billing_details');
    }
}
