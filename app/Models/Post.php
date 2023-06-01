<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => 'Konten Pertama',
            "author" => 'Muhammad Aldisyah Rahman',
            "slug" => 'konten-pertama',
            "body" => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, repudiandae debitis? Accusamus eius sunt adipisci ad, nesciunt nam sapiente quod dignissimos esse earum dolorum, provident cupiditate voluptatum aspernatur molestias labore corporis laudantium officia suscipit consectetur? Non nulla labore autem quidem excepturi reiciendis, similique doloribus deserunt eaque? Vero et veniam magnam illum minus autem quaerat in, maiores, assumenda iste voluptas. Modi quidem earum sapiente tempore ex odio quibusdam quas magnam aliquam possimus similique commodi neque, minus dolore esse harum ullam officiis vero at vitae tempora. Voluptate non soluta adipisci eum ipsam!'
        ],
        [
            "title" => 'Konten kedua',
            "author" => 'Nada Aura Wansa',
            "slug" => 'konten-kedua',
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad sit vero optio rem voluptatem reiciendis ratione ipsam, earum dolorem perspiciatis porro recusandae quaerat temporibus sed adipisci amet perferendis inventore magnam repudiandae libero. Dignissimos, ullam. Qui eligendi eius provident, similique dolorem aspernatur quis voluptatem id corporis dolores dolor temporibus deleniti enim! Fuga reiciendis enim quasi accusantium velit, omnis labore laudantium sint? Modi tempore inventore numquam blanditiis architecto ex omnis esse harum, velit sunt nisi quibusdam animi nemo iusto. Ullam voluptatibus libero natus vel, asperiores beatae cumque error enim explicabo nisi nemo amet facere vero. Impedit natus placeat facilis? Totam, maiores cupiditate.'
        ]
    ];

    public static function all() 
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];

        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
        }
    }

        return $post;
    }
}