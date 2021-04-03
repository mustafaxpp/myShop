<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum("status",["pendding" , "canceled" , "accepted","delivered"]);
            $table->decimal("total_invoice")->nullable();
            $table->timestamp("received_at")->nullable();
            $table->foreignId("shipping_companies_id")->constrained("shipping_companies");
            $table->foreignId("payment_method_id")->constrained("payment_methods");
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
        Schema::dropIfExists('orders');
    }
}
