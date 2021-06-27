<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
                    'id' => 1,
                    'name' => 'Name1',
                    'price' => 1000,
                    'brand' => 'Brand1',
                    'shopping_site_name' => 'Amzon',
                    'shopping_site_url' => 'aaaaaaaa']);
        $product->save();
        
        $product = new \App\Product([
                    'id' => 2,
                    'name' => 'Name2',
                    'price' => 2000,
                    'brand' => 'Brand2',
                    'shopping_site_name' => 'ZOZOTOWN',
                    'shopping_site_url' => 'bbbbbbbbb']);
        $product->save();
        
        $product = new \App\Product([
                    'id' => 3,
                    'name' => 'Name3',
                    'price' => 3000,
                    'brand' => 'Brand3',
                    'shopping_site_name' => 'Amazon',
                    'shopping_site_url' => 'cccccccccc']);
        $product->save();
        
    }
}
