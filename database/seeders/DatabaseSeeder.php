<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        // User::create([
        //     'name' => 'Stark Mika',
        //     'username' => 'stark',
        //     'email' => 'stark@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione incidunt nulla doloribus nam nostrum nisi labore debitis asperiores esse.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione incidunt nulla doloribus nam nostrum nisi labore debitis asperiores esse. Eius ad odit ullam mollitia incidunt iure debitis error modi quos enim voluptas quis, corrupti non suscipit consectetur minima eos voluptatem qui earum totam vel. Ullam in quod a explicabo. Consectetur minus aut amet. Aliquam, dolorum. Nihil quos ratione veritatis voluptatum et, optio, iste placeat similique sit, maxime incidunt possimus blanditiis consequuntur tempore eius est quod corporis maiores laborum delectus illo!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione incidunt nulla doloribus nam nostrum nisi labore debitis asperiores esse.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione incidunt nulla doloribus nam nostrum nisi labore debitis asperiores esse. Eius ad odit ullam mollitia incidunt iure debitis error modi quos enim voluptas quis, corrupti non suscipit consectetur minima eos voluptatem qui earum totam vel. Ullam in quod a explicabo. Consectetur minus aut amet. Aliquam, dolorum. Nihil quos ratione veritatis voluptatum et, optio, iste placeat similique sit, maxime incidunt possimus blanditiis consequuntur tempore eius est quod corporis maiores laborum delectus illo!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
