<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'dawud mauludi',
            'username' => 'DawudMauludi',
            'email' => 'dawudMauludi@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Himmatul Aliyah',
        //     'email' => 'himmatulaliyah@gmail.com',
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
        //     'titel' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'exerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi totam delectus accusamus voluptas ex aliquam explicabo minima commodi fugiat distinctio neque!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi totam delectus accusamus voluptas ex aliquam explicabo minima commodi fugiat distinctio neque! Eum sunt earum totam, exercitationem nisi expedita blanditiis quam ducimus rem asperiores delectus, quisquam harum doloremque quibusdam vitae sed. Consequatur dolor, nesciunt, perferendis hic eaque tenetur animi est aspernatur facere autem, deleniti eveniet harum temporibus. Assumenda dignissimos nulla laudantium, porro repellendus tempore vitae, dolor aspernatur, sed iste sequi repudiandae quod! Tempore esse dignissimos voluptas expedita, rerum laboriosam! Recusandae facere necessitatibus assumenda, dolorum adipisci deserunt perferendis odio neque ipsa unde sint libero laboriosam velit rem porro aliquid ullam? Eveniet.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'titel' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'exerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi totam delectus accusamus voluptas ex aliquam explicabo minima commodi fugiat distinctio neque!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi totam delectus accusamus voluptas ex aliquam explicabo minima commodi fugiat distinctio neque! Eum sunt earum totam, exercitationem nisi expedita blanditiis quam ducimus rem asperiores delectus, quisquam harum doloremque quibusdam vitae sed. Consequatur dolor, nesciunt, perferendis hic eaque tenetur animi est aspernatur facere autem, deleniti eveniet harum temporibus. Assumenda dignissimos nulla laudantium, porro repellendus tempore vitae, dolor aspernatur, sed iste sequi repudiandae quod! Tempore esse dignissimos voluptas expedita, rerum laboriosam! Recusandae facere necessitatibus assumenda, dolorum adipisci deserunt perferendis odio neque ipsa unde sint libero laboriosam velit rem porro aliquid ullam? Eveniet.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'titel' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'exerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi totam delectus accusamus voluptas ex aliquam explicabo minima commodi fugiat distinctio neque!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi totam delectus accusamus voluptas ex aliquam explicabo minima commodi fugiat distinctio neque! Eum sunt earum totam, exercitationem nisi expedita blanditiis quam ducimus rem asperiores delectus, quisquam harum doloremque quibusdam vitae sed. Consequatur dolor, nesciunt, perferendis hic eaque tenetur animi est aspernatur facere autem, deleniti eveniet harum temporibus. Assumenda dignissimos nulla laudantium, porro repellendus tempore vitae, dolor aspernatur, sed iste sequi repudiandae quod! Tempore esse dignissimos voluptas expedita, rerum laboriosam! Recusandae facere necessitatibus assumenda, dolorum adipisci deserunt perferendis odio neque ipsa unde sint libero laboriosam velit rem porro aliquid ullam? Eveniet.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'titel' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'exerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi totam delectus accusamus voluptas ex aliquam explicabo minima commodi fugiat distinctio neque!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, sequi totam delectus accusamus voluptas ex aliquam explicabo minima commodi fugiat distinctio neque! Eum sunt earum totam, exercitationem nisi expedita blanditiis quam ducimus rem asperiores delectus, quisquam harum doloremque quibusdam vitae sed. Consequatur dolor, nesciunt, perferendis hic eaque tenetur animi est aspernatur facere autem, deleniti eveniet harum temporibus. Assumenda dignissimos nulla laudantium, porro repellendus tempore vitae, dolor aspernatur, sed iste sequi repudiandae quod! Tempore esse dignissimos voluptas expedita, rerum laboriosam! Recusandae facere necessitatibus assumenda, dolorum adipisci deserunt perferendis odio neque ipsa unde sint libero laboriosam velit rem porro aliquid ullam? Eveniet.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        $this->call([
            User::class,
            Category::class,
            Post::class
        ]);
    }
}
