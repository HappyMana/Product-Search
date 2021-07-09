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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('product_users')->truncate();
        $product_users = new \App\ProductUser([
                    'id' => 1,
                    'product_id' => 1,
                    'user_id' => 1]);
        $product_users->save();
        
        $product_users = new \App\ProductUser([
                    'id' => 2,
                    'product_id' => 2,
                    'user_id' => 2]);
        $product_users->save();
        
        $product_users = new \App\ProductUser([
                    'id' => 3,
                    'product_id' => 3,
                    'user_id' => 1]);
        $product_users->save();
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
