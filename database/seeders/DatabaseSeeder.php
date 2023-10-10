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
     */
    public function run(): void
    {

       

        //  User::create([
        //     'name' => 'Desy',
        //    'email' => 'desy@gmail.com',
        //    'password' => bcrypt('1612')

        //  ]);

        //  User::create([
        //      'name' => 'Woozi',
        //      'email' => 'woozi@gmail.com',
        //      'password' => bcrypt('1616')

        //  ]);

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
        //     'excerpt' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio ad quis, harum labore excepturi omnis ab at? Recusandae a, magnam repellat accusamus vero quae molestiae rerum? Ipsam accusamus, cupiditate porro neque temporibus corporis obcaecati tempore libero excepturi eius iusto reprehenderit quam, rerum architecto consequatur ab vero! Blanditiis magnam dolores et eum tenetur saepe aut veniam! Optio sit autem animi, at perspiciatis natus facilis eaque? Nobis, quisquam quibusdam similique voluptate, velit harum magni voluptatum ex itaque quae saepe inventore, est aliquam quam fuga minima nemo corporis ullam nisi ipsam doloribus. Cupiditate nostrum aspernatur voluptatibus adipisci ducimus, beatae architecto! Id, eveniet quo.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);


        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio ad quis, harum labore excepturi omnis ab at? Recusandae a, magnam repellat accusamus vero quae molestiae rerum? Ipsam accusamus, cupiditate porro neque temporibus corporis obcaecati tempore libero excepturi eius iusto reprehenderit quam, rerum architecto consequatur ab vero! Blanditiis magnam dolores et eum tenetur saepe aut veniam! Optio sit autem animi, at perspiciatis natus facilis eaque? Nobis, quisquam quibusdam similique voluptate, velit harum magni voluptatum ex itaque quae saepe inventore, est aliquam quam fuga minima nemo corporis ullam nisi ipsam doloribus. Cupiditate nostrum aspernatur voluptatibus adipisci ducimus, beatae architecto! Id, eveniet quo.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio ad quis, harum labore excepturi omnis ab at? Recusandae a, magnam repellat accusamus vero quae molestiae rerum? Ipsam accusamus, cupiditate porro neque temporibus corporis obcaecati tempore libero excepturi eius iusto reprehenderit quam, rerum architecto consequatur ab vero! Blanditiis magnam dolores et eum tenetur saepe aut veniam! Optio sit autem animi, at perspiciatis natus facilis eaque? Nobis, quisquam quibusdam similique voluptate, velit harum magni voluptatum ex itaque quae saepe inventore, est aliquam quam fuga minima nemo corporis ullam nisi ipsam doloribus. Cupiditate nostrum aspernatur voluptatibus adipisci ducimus, beatae architecto! Id, eveniet quo.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio ad quis, harum labore excepturi omnis ab at? Recusandae a, magnam repellat accusamus vero quae molestiae rerum? Ipsam accusamus, cupiditate porro neque temporibus corporis obcaecati tempore libero excepturi eius iusto reprehenderit quam, rerum architecto consequatur ab vero! Blanditiis magnam dolores et eum tenetur saepe aut veniam! Optio sit autem animi, at perspiciatis natus facilis eaque? Nobis, quisquam quibusdam similique voluptate, velit harum magni voluptatum ex itaque quae saepe inventore, est aliquam quam fuga minima nemo corporis ullam nisi ipsam doloribus. Cupiditate nostrum aspernatur voluptatibus adipisci ducimus, beatae architecto! Id, eveniet quo.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
