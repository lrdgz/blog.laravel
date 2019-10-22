<?php

use Illuminate\Database\Seeder;
use \App\User;
use \App\Post;
use \App\Category;
use \App\Tag;
use \Illuminate\Support\Facades\DB;


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
        factory(Tag::class, 500)->create();


        foreach(range(1, 500) as $index) {
            DB::table('post_tag')->insert([
                'post_id' => rand(1,500),
                'tag_id' => rand(1,500)
            ]);
        }

        // $this->call(UsersTableSeeder::class);
    }
}
