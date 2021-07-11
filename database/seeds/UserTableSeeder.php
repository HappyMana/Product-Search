<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement("SET FOREIGN_KEY_CHECKS=0;");
        // DB::table("users")->truncate();
        $user = new \App\User([
                    "id" => 1,
                    "name" => "Name1",
                    "email" => "hoge@gmail.com",
                    "password" => "aaaaaaaaaa"]);
        $user->save();
        
        $user = new \App\User([
                    "id" => 2,
                    "name" => "Name2",
                    "email" => "fuga@gmail.com",
                    "password" => "bbbbbbbbbb"]);
        $user->save();
        
        $user = new \App\User([
                    "id" => 3,
                    "name" => "Name3",
                    "email" => "piyo@gmail.com",
                    "password" => "cccccccccc"]);
        $user->save();
        // DB::statement("SET FOREIGN_KEY_CHECKS=1;");
    }
}
