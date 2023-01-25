<?php

namespace App\Models;

class Post
{
   private static $blog_posts =  [

    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Mirzan Abdullah",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus explicabo saepe quis eaque provident? Voluptatibus odio beatae praesentium perferendis totam, recusandae iure cumque possimus provident. Impedit harum ullam vero cumque. Vitae omnis perferendis vero dicta. Optio, facilis. Autem quibusdam facilis perspiciatis aperiam cupiditate illo maiores sequi tempore, vero praesentium quam unde ratione, numquam expedita voluptas error libero delectus voluptatem! Officia magnam magni placeat tenetur libero dolores veritatis numquam modi incidunt, sunt facere voluptatum quia. Esse expedita sunt sequi non reiciendis?"
    ],
    [
        "title" => "Judul Post Keduaaaaa",
        "slug" => "judul-post-kedua",
        "author" => "Rafi Zul",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto adipisci iusto eligendi nemo quod a culpa laborum, explicabo maxime cum deleniti quidem et quisquam excepturi perspiciatis aliquam, quia voluptate sunt molestiae obcaecati fuga! Mollitia architecto molestiae iste porro. Voluptates ducimus, beatae amet recusandae placeat laborum harum id a obcaecati facere libero, sed suscipit enim nulla cupiditate veritatis inventore numquam saepe ab. Unde cupiditate, voluptatum, omnis eaque provident numquam molestias distinctio consequatur culpa, adipisci animi. Pariatur blanditiis enim vel vero aliquid nulla, consequuntur excepturi, magnam exercitationem maxime reprehenderit cupiditate ipsam consequatur."
    ]
    ];

    public static function all(){
        return collect(self::$blog_posts);    //menggunakan self karna static, kalo tidak static menggunakan "$this->blog_posts"
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
