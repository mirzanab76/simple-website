<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        User::create([
            'name' => 'Mirzan Abdullah',
            'username' => 'mirzann',
            'email' => 'mirzanab76@gmail.com',
            'password' => bcrypt(12345)
        ]);

        User::factory(3)->create();
        Post::factory(20)->create();



        // User::create([
        //     'name' => 'Dico Pak',
        //     'email' => 'dicopakk@gmail.com',
        //     'password' => bcrypt(123456)
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio modi tempore et, architecto voluptatem sint magnam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, repudiandae labore. Officia mollitia quia facilis. Quam veritatis aut facere quo. Velit, odit facilis ducimus similique adipisci neque illo tempore est nostrum reiciendis, ut incidunt dignissimos quas voluptatum, laboriosam tempora iste. Pariatur dignissimos eum ullam quidem soluta consectetur cum tempora incidunt veniam neque aliquid eos aspernatur, molestias fugit dolores iure ad aliquam nesciunt minima eaque laboriosam! Sed, impedit aut esse omnis possimus ratione quasi quam ut doloremque et quidem non, exercitationem iure, quisquam praesentium animi voluptatibus. Dolor ratione unde, culpa veritatis sunt, facilis cumque officiis rem omnis vero, inventore obcaecati ist',
        //     'category_id'=> 1,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio modi tempore et, architecto voluptatem sint magnam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, repudiandae labore. Officia mollitia quia facilis. Quam veritatis aut facere quo. Velit, odit facilis ducimus similique adipisci neque illo tempore est nostrum reiciendis, ut incidunt dignissimos quas voluptatum, laboriosam tempora iste. Pariatur dignissimos eum ullam quidem soluta consectetur cum tempora incidunt veniam neque aliquid eos aspernatur, molestias fugit dolores iure ad aliquam nesciunt minima eaque laboriosam! Sed, impedit aut esse omnis possimus ratione quasi quam ut doloremque et quidem non, exercitationem iure, quisquam praesentium animi voluptatibus. Dolor ratione unde, culpa veritatis sunt, facilis cumque officiis rem omnis vero, inventore obcaecati ist',
        //     'category_id'=> 1,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio modi tempore et, architecto voluptatem sint magnam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, repudiandae labore. Officia mollitia quia facilis. Quam veritatis aut facere quo. Velit, odit facilis ducimus similique adipisci neque illo tempore est nostrum reiciendis, ut incidunt dignissimos quas voluptatum, laboriosam tempora iste. Pariatur dignissimos eum ullam quidem soluta consectetur cum tempora incidunt veniam neque aliquid eos aspernatur, molestias fugit dolores iure ad aliquam nesciunt minima eaque laboriosam! Sed, impedit aut esse omnis possimus ratione quasi quam ut doloremque et quidem non, exercitationem iure, quisquam praesentium animi voluptatibus. Dolor ratione unde, culpa veritatis sunt, facilis cumque officiis rem omnis vero, inventore obcaecati ist',
        //     'category_id'=> 2,
        //     'user_id'=> 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio modi tempore et, architecto voluptatem sint magnam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, repudiandae labore. Officia mollitia quia facilis. Quam veritatis aut facere quo. Velit, odit facilis ducimus similique adipisci neque illo tempore est nostrum reiciendis, ut incidunt dignissimos quas voluptatum, laboriosam tempora iste. Pariatur dignissimos eum ullam quidem soluta consectetur cum tempora incidunt veniam neque aliquid eos aspernatur, molestias fugit dolores iure ad aliquam nesciunt minima eaque laboriosam! Sed, impedit aut esse omnis possimus ratione quasi quam ut doloremque et quidem non, exercitationem iure, quisquam praesentium animi voluptatibus. Dolor ratione unde, culpa veritatis sunt, facilis cumque officiis rem omnis vero, inventore obcaecati ist',
        //     'category_id'=> 2,
        //     'user_id'=> 2
        // ]);


    }
}
