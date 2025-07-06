<?php

namespace App\Models;

class Post

{
    private static $posts = [
    [
        "title" => "Postingan 1",
        "slug" => "postingan-1",
        "image" => "https://picsum.photos/800/400",
        "created_at" => "2023-10-01 12:00:00",
        "updated_at" => "2023-10-01 12:00:00",
        "category" => "Teknologi",
        "author" => "Admin",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et obcaecati consectetur odio, praesentium illo id esse ipsam corrupti temporibus cum porro iste vitae possimus earum quia non cupiditate, exercitationem, officiis expedita hic nobis ipsum? Dicta eveniet, hic qui natus nisi voluptas dolor molestias velit asperiores animi obcaecati libero quidem ullam ab aperiam eius ipsa! Alias, inventore ad! Dolorem aliquid natus temporibus enim reprehenderit aperiam quisquam, deleniti error qui consectetur nisi facilis dignissimos quidem dolorum quia eos? Obcaecati, ducimus? Exercitationem vitae numquam maxime ab eos blanditiis voluptatum eligendi facere, veritatis itaque, eaque obcaecati accusamus? Commodi pariatur perspiciatis ipsum voluptatem rem ratione?"
    ],
    [
        "title" => "Postingan 2",
        "slug" => "postingan-2",
        "image" => "https://picsum.photos/800/400",
        "created_at" => "2023-10-02 12:00:00",
        "updated_at" => "2023-10-02 12:00:00",
        "category" => "Kesehatan",
        "author" => "Pengrajin",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta qui nostrum voluptatum porro optio ratione cumque libero quasi? Voluptates cum at odit? Dolorem magni delectus, natus reprehenderit laborum dignissimos neque consequuntur dolore tempore molestias nostrum, consequatur vel maiores id nemo fuga impedit? Dolorum, doloremque. Eos ipsa quisquam esse nemo nihil commodi adipisci possimus, ex quos magni, voluptates voluptatibus quaerat, aliquam odio id? Pariatur numquam cupiditate quas expedita fugit repudiandae velit voluptate minus dolorem voluptates. Modi, dolorum porro soluta ex hic itaque, sunt neque, perferendis velit iusto quidem aliquid."
    ]
];

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}