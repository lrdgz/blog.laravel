<?php

use Illuminate\Database\Seeder;
use \App\User;
use \App\Post;
use \App\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(User::class, 50)->create();
        factory(Post::class, 500)->create();
        factory(Category::class, 500)->create();

        // $this->call(UsersTableSeeder::class);
    }
}
