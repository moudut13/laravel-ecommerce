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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_first_id')->nullable();
            $table->integer('category_second_id')->nullable();
            $table->integer('category_third_id')->nullable();
            $table->integer('tag_id')->nullable();
            $table->string('name')->nullable()->unique();
            $table->string('slug')->nullable()->unique();
            $table->string('sku')->nullable()->unique();
            $table->integer('stock')->nullable();
            $table->text('short_desc')->nullable();
            $table->longText('long_desc')->nullable();
            $table->unsignedInteger('regular_price')->nullable();
            $table->unsignedInteger('sale_price')->nullable();
            $table->text('gallery')->nullable();
            $table->text('color')->nullable();
            $table->text('size')->nullable();
            $table->boolean('hot_deal')->nullable();
            $table->boolean('featured_deal')->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('trash')->nullable();
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
};
