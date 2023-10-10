<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Desy",
            "body" => "
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet modi aspernatur facilis veritatis ea cupiditate autem consectetur natus numquam non quisquam fugit quo rerum laborum eius recusandae molestias atque, laudantium eos, nesciunt ab, corrupti nostrum omnis. Enim, optio nemo? Minus aperiam eaque perspiciatis itaque placeat praesentium, dolore nulla veritatis excepturi consequuntur consectetur deserunt. Et, fuga sit dolorem ullam commodi cupiditate repudiandae quisquam sed facilis error quos, explicabo deserunt velit ex dicta necessitatibus veniam cum vel libero repellendus delectus nostrum impedit."
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Woozi",
            "body" => "
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ullam deleniti consequatur, odio at corrupti nam dolores assumenda, reiciendis aut beatae odit fugit nostrum quisquam corporis hic ipsum illo alias? Voluptates sequi commodi excepturi cum ab eaque animi illum optio culpa error repellat iste eligendi nobis dolorum dolorem facere quo, quidem quos, molestias omnis provident. Adipisci, minima reiciendis! Officia eius recusandae est nostrum illo aspernatur commodi beatae, maxime fugit non quo voluptatem molestias veniam. Optio vel debitis rem, culpa consequuntur maxime expedita est, officiis nostrum neque ad dignissimos id perferendis quo dolorem, nam vitae nobis voluptate exercitationem. Tempore, a cumque?"
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
