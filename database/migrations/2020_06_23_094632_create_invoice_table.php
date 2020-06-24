<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('idinvoices');
            $table->string('name');
            $table->date('invoicedates');
            $table->date('due_date');
            $table->string('invoicesnumber');
            $table->string('invoicesstatus');
            $table->string('billingto');
            $table->string('company');
            $table->string('tittle');
            $table->string('price');
            $table->string('pricenexts');
            $table->string('total');
            $table->softDeletes();
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
        Schema::dropIfExists('invoice');
    }
}
