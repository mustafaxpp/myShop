<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->decimal("price", 8, 2);
            $table->string("image")->nullable();
            $table->foreignId("category_id")->nullable()->constrained("categories");
            $table->foreignId("brand_id")->nullable()->constrained("brands");
            $table->foreignId("stock_id")->nullable()->constrained("stocks");
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
        Schema::dropIfExists('products');
    }
}
