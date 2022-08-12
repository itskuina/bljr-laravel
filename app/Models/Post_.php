<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Restu Pamungkas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum repellat alias enim, ipsa nesciunt ratione, aspernatur officiis beatae pariatur, inventore delectus velit aliquid temporibus doloribus. Voluptas voluptatibus possimus alias sit voluptates doloribus cupiditate eos provident vitae nisi commodi asperiores odit, autem accusantium tenetur aut maiores perspiciatis voluptatem. Sit, explicabo blanditiis repellat in quidem id facilis tempora alias illum accusantium asperiores itaque ipsa temporibus odit omnis quibusdam dolore, reprehenderit quis cupiditate. Dignissimos, odit libero. Porro, quo dolorem quasi quos doloremque excepturi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ilham Andaru",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum repellat alias enim, ipsa nesciunt ratione, aspernatur officiis beatae pariatur, inventore delectus velit aliquid temporibus doloribus. Voluptas voluptatibus possimus alias sit voluptates doloribus cupiditate eos provident vitae nisi commodi asperiores odit, autem accusantium tenetur aut maiores perspiciatis voluptatem. Sit, explicabo blanditiis repellat in quidem id facilis tempora alias illum accusantium asperiores itaque ipsa temporibus odit omnis quibusdam dolore, reprehenderit quis cupiditate. Dignissimos, odit libero. Porro, quo dolorem quasi quos doloremque excepturi."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
