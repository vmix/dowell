<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'InnoDB';
            $table->unsignedInteger('id')->default(0);
            $table->string('url', 255)->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->char('currencyId', 3)->nullable();
            $table->string('categoryId', 10)->nullable();
            $table->string('picture', 255)->nullable();
            $table->integer('delivery')->nullable();
            $table->string('name', 255)->default('test_name');
            $table->string('model', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('vendor', 50)->nullable();
            $table->string('vendorCode', 300)->nullable();
            $table->tinyInteger('manufacturer_warranty')->nullable();
            $table->text('sales_notes')->nullable();
            $table->text('params')->nullable();
            $table->decimal('delivery_cost', 8,2)->nullable();
            $table->integer('delivery_days')->nullable();
            $table->tinyInteger('available')->default(3);
            $table->timestamps();
            $table->unique('id');
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
