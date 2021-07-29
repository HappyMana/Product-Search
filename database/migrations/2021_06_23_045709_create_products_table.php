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
        Schema::create("products", function (Blueprint $table) {
            $table->increments("id");
            $table->text("itemName");
            $table->text("catchcopy");
            $table->string("itemCode", 100);
            $table->integer("itemPrice");
            $table->text("itemCaption");
            $table->integer("reviewCount");
            $table->integer("reviewAverage");
            $table->text("itemUrl");
            $table->text("mediumImageUrl1");
            $table->text("mediumImageUrl2");
            $table->text("mediumImageUrl3");
            $table->string("shopName", 100);
            $table->text("shopUrl");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("products");
    }
}
