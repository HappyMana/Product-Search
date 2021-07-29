<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("product_users", function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("product_id");
            $table->unsignedInteger("user_id");
            // $table->primary(["product_id", "user_id"]);
            $table->timestamps();
        
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");

            $table->unique(["product_id", "user_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("product_users");
    }
}
