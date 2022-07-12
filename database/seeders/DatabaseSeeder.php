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
        User::factory(3)->create();
        Post::factory(20)->create();


        Category::create([
            'name'  => 'Web Programming',
            'slug'  => 'web-programming'
        ]);

        Category::create([
            'name'  => 'Personal',
            'slug'  => 'personal'
        ]);

        Category::create([
            'name'  => 'Web Design',
            'slug'  => 'web-design'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug'  => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //                 Rem velit nihil laudantium quis deserunt debitis voluptatem incidunt, i
        //                 ure quidem recusandae hic molestias fuga enim sit aperiam itaque officia 
        //                 quasi sequi libero iste dicta nobis vero! Vitae laborum itaque impedit adipisci 
        //                 delectus perferendis voluptates animi, reprehenderit necessitatibus,
        //                 dicta iste quasi, quisquam a molestias incidunt autem distinctio vel ad. Est, 
        //                 maiores culpa dignissimos tempore laboriosam animi eius sit aliquam 
        //                 distinctio delectus et beatae error, debitis illum id! Nostrum beatae recusandae 
        //                 similique veritatis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug'  => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //                 Rem velit nihil laudantium quis deserunt debitis voluptatem incidunt, i
        //                 ure quidem recusandae hic molestias fuga enim sit aperiam itaque officia 
        //                 quasi sequi libero iste dicta nobis vero! Vitae laborum itaque impedit adipisci 
        //                 delectus perferendis voluptates animi, reprehenderit necessitatibus,
        //                 dicta iste quasi, quisquam a molestias incidunt autem distinctio vel ad. Est, 
        //                 maiores culpa dignissimos tempore laboriosam animi eius sit aliquam 
        //                 distinctio delectus et beatae error, debitis illum id! Nostrum beatae recusandae 
        //                 similique veritatis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug'  => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //                 Rem velit nihil laudantium quis deserunt debitis voluptatem incidunt, i
        //                 ure quidem recusandae hic molestias fuga enim sit aperiam itaque officia 
        //                 quasi sequi libero iste dicta nobis vero! Vitae laborum itaque impedit adipisci 
        //                 delectus perferendis voluptates animi, reprehenderit necessitatibus,
        //                 dicta iste quasi, quisquam a molestias incidunt autem distinctio vel ad. Est, 
        //                 maiores culpa dignissimos tempore laboriosam animi eius sit aliquam 
        //                 distinctio delectus et beatae error, debitis illum id! Nostrum beatae recusandae 
        //                 similique veritatis?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug'  => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //                 Rem velit nihil laudantium quis deserunt debitis voluptatem incidunt, i
        //                 ure quidem recusandae hic molestias fuga enim sit aperiam itaque officia 
        //                 quasi sequi libero iste dicta nobis vero! Vitae laborum itaque impedit adipisci 
        //                 delectus perferendis voluptates animi, reprehenderit necessitatibus,
        //                 dicta iste quasi, quisquam a molestias incidunt autem distinctio vel ad. Est, 
        //                 maiores culpa dignissimos tempore laboriosam animi eius sit aliquam 
        //                 distinctio delectus et beatae error, debitis illum id! Nostrum beatae recusandae 
        //                 similique veritatis?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
