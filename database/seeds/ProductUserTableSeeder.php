<?php

use Illuminate\Database\Seeder;

class ProductUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_users = new \App\ProductUser([
                    'product_id' => 1,
                    'user_id' => 1]);
        $product_users->save();
        
        $product_users = new \App\ProductUser([
                    'product_id' => 2,
                    'user_id' => 2]);
        $product_users->save();
        
        $product_users = new \App\ProductUser([
                    'product_id' => 3,
                    'user_id' => 1]);
        $product_users->save();
    }
}
