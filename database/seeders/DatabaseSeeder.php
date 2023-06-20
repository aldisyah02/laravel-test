<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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
        
        Post::factory(20)->create();

        User::create([
            'name' => 'Muhammad Aldisyah Rahman',
            'username' => 'aldisyah',
            'email' => 'aldisyahrahman@gmail.com',
            'password' => bcrypt('passwords')
        ]);
        
        User::factory(3) ->create();

        // User::create([
        //     'name' => 'Nada Aura Wansa',
        //     'email' => 'nadaaurwansa@gmail.com',
        //     'password' => bcrypt('passwords')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eum quod impedit harum veritatis aperiam est velit laudantium obcaecati nostrum natus nesciunt veniam doloremque a',
        //     'body' => '
        //     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eum quod impedit harum veritatis aperiam est velit laudantium obcaecati nostrum natus nesciunt veniam doloremque a, laborum libero quibusdam reiciendis corporis. Quis ratione quasi fugit vitae soluta, enim quidem placeat explicabo voluptate velit dolores culpa, veniam delectus odit esse sed repudiandae iure aliquam corrupti neque tempora quae nulla officia.</p><p> Corporis, molestiae recusandae! Odio ipsam quibusdam quos illo assumenda at dicta nemo vel ea officia, deleniti rerum itaque provident natus, incidunt porro eaque reprehenderit sit eligendi ducimus. Non voluptatem quidem voluptatibus molestias error, nisi temporibus, dolorum blanditiis, ad nihil pariatur doloribus sapiente?<p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eum quod impedit harum veritatis aperiam est velit laudantium obcaecati nostrum natus nesciunt veniam doloremque a',
        //     'body' => '
        //     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eum quod impedit harum veritatis aperiam est velit laudantium obcaecati nostrum natus nesciunt veniam doloremque a, laborum libero quibusdam reiciendis corporis. Quis ratione quasi fugit vitae soluta, enim quidem placeat explicabo voluptate velit dolores culpa, veniam delectus odit esse sed repudiandae iure aliquam corrupti neque tempora quae nulla officia.</p><p> Corporis, molestiae recusandae! Odio ipsam quibusdam quos illo assumenda at dicta nemo vel ea officia, deleniti rerum itaque provident natus, incidunt porro eaque reprehenderit sit eligendi ducimus. Non voluptatem quidem voluptatibus molestias error, nisi temporibus, dolorum blanditiis, ad nihil pariatur doloribus sapiente?<p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eum quod impedit harum veritatis aperiam est velit laudantium obcaecati nostrum natus nesciunt veniam doloremque a',
        //     'body' => '
        //     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda eum quod impedit harum veritatis aperiam est velit laudantium obcaecati nostrum natus nesciunt veniam doloremque a, laborum libero quibusdam reiciendis corporis. Quis ratione quasi fugit vitae soluta, enim quidem placeat explicabo voluptate velit dolores culpa, veniam delectus odit esse sed repudiandae iure aliquam corrupti neque tempora quae nulla officia.</p><p> Corporis, molestiae recusandae! Odio ipsam quibusdam quos illo assumenda at dicta nemo vel ea officia, deleniti rerum itaque provident natus, incidunt porro eaque reprehenderit sit eligendi ducimus. Non voluptatem quidem voluptatibus molestias error, nisi temporibus, dolorum blanditiis, ad nihil pariatur doloribus sapiente?<p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
