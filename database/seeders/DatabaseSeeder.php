<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Restu Pamungkas',
            'username' => 'rstupmks',
            'email' => 'restuxrpl1@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Ilham Andaru',
        //     'email' => 'hammuud@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam quis nisi sit, reprehenderit sapiente soluta corrupti voluptatem voluptates accusamus vitae hic velit commodi officiis nesciunt.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam quis nisi sit, reprehenderit sapiente soluta corrupti voluptatem voluptates accusamus vitae hic velit commodi officiis nesciunt. Dolor similique repudiandae eaque accusamus hic quibusdam illo omnis nemo expedita, voluptate doloremque adipisci totam nam recusandae quae velit alias asperiores fuga quisquam nostrum excepturi libero cupiditate! Accusamus, ut nisi modi ipsam dolor expedita necessitatibus tempora laudantium, earum iusto, numquam voluptatibus pariatur sit. Voluptatibus explicabo asperiores eos! Beatae eum ipsum illum sint aliquam. Aspernatur laborum ullam ab consectetur quaerat assumenda soluta cumque quae, maiores cum esse, saepe perspiciatis minima tempore nam vel odio nulla.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam quis nisi sit, reprehenderit sapiente soluta corrupti voluptatem voluptates accusamus vitae hic velit commodi officiis nesciunt.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam quis nisi sit, reprehenderit sapiente soluta corrupti voluptatem voluptates accusamus vitae hic velit commodi officiis nesciunt. Dolor similique repudiandae eaque accusamus hic quibusdam illo omnis nemo expedita, voluptate doloremque adipisci totam nam recusandae quae velit alias asperiores fuga quisquam nostrum excepturi libero cupiditate! Accusamus, ut nisi modi ipsam dolor expedita necessitatibus tempora laudantium, earum iusto, numquam voluptatibus pariatur sit. Voluptatibus explicabo asperiores eos! Beatae eum ipsum illum sint aliquam. Aspernatur laborum ullam ab consectetur quaerat assumenda soluta cumque quae, maiores cum esse, saepe perspiciatis minima tempore nam vel odio nulla.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam quis nisi sit, reprehenderit sapiente soluta corrupti voluptatem voluptates accusamus vitae hic velit commodi officiis nesciunt.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam quis nisi sit, reprehenderit sapiente soluta corrupti voluptatem voluptates accusamus vitae hic velit commodi officiis nesciunt. Dolor similique repudiandae eaque accusamus hic quibusdam illo omnis nemo expedita, voluptate doloremque adipisci totam nam recusandae quae velit alias asperiores fuga quisquam nostrum excepturi libero cupiditate! Accusamus, ut nisi modi ipsam dolor expedita necessitatibus tempora laudantium, earum iusto, numquam voluptatibus pariatur sit. Voluptatibus explicabo asperiores eos! Beatae eum ipsum illum sint aliquam. Aspernatur laborum ullam ab consectetur quaerat assumenda soluta cumque quae, maiores cum esse, saepe perspiciatis minima tempore nam vel odio nulla.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam quis nisi sit, reprehenderit sapiente soluta corrupti voluptatem voluptates accusamus vitae hic velit commodi officiis nesciunt.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ullam quis nisi sit, reprehenderit sapiente soluta corrupti voluptatem voluptates accusamus vitae hic velit commodi officiis nesciunt. Dolor similique repudiandae eaque accusamus hic quibusdam illo omnis nemo expedita, voluptate doloremque adipisci totam nam recusandae quae velit alias asperiores fuga quisquam nostrum excepturi libero cupiditate! Accusamus, ut nisi modi ipsam dolor expedita necessitatibus tempora laudantium, earum iusto, numquam voluptatibus pariatur sit. Voluptatibus explicabo asperiores eos! Beatae eum ipsum illum sint aliquam. Aspernatur laborum ullam ab consectetur quaerat assumenda soluta cumque quae, maiores cum esse, saepe perspiciatis minima tempore nam vel odio nulla.',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
