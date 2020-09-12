<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesSeeder::class);//dans cet ordre le call car pour avoir 
        $this->call(UsersSeeder::class);
        // $this->call(CoursesSeeder::class); //pour montrer à laravel qu'on veut executer un seeder
    }
}
