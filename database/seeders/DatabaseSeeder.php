<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Nilai;
use App\Models\Indikator;
use App\Models\alternatif;
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

        User::factory(3)->create();
        Alternatif::factory(6)->create();
        Nilai::factory(6)->create();
        Indikator::factory(23)->create();

        // Kriteria::factory(23)->create();
        // Alternatif::factory(6)->create();
        // User::create([
        //     'name' => 'Alif',
        //     'username' => 'malif',
        //     'email' => 'alifm665@gmail',
        //     'password' => bcrypt('12345')
        // ]);
        // Post::factory(20)->create();
        // User::create([
        //     'name' => 'idir',
        //     'email' => 'idir@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming',
        // ]);
        // Category::create([
        //     'name' => 'Web Desain',
        //     'slug' => 'web-desain',
        // ]);
        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis nihil error ipsa quibusdam numquam dignissimos libero, molestiae amet molestias explicabo, impedit quaerat at tenetur neque? Non magnam inventore deleniti placeat?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint natus inventore iure officiis molestiae dicta rerum dolore! Nostrum odit neque iusto aperiam assumenda, quia culpa perspiciatis suscipit impedit voluptatum nobis dolorem dignissimos eligendi officia at asperiores officiis quibusdam id error repudiandae saepe repellendus incidunt accusamus. Molestias doloribus explicabo debitis deleniti.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis nihil error ipsa quibusdam numquam dignissimos libero, molestiae amet molestias explicabo, impedit quaerat at tenetur neque? Non magnam inventore deleniti placeat?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint natus inventore iure officiis molestiae dicta rerum dolore! Nostrum odit neque iusto aperiam assumenda, quia culpa perspiciatis suscipit impedit voluptatum nobis dolorem dignissimos eligendi officia at asperiores officiis quibusdam id error repudiandae saepe repellendus incidunt accusamus. Molestias doloribus explicabo debitis deleniti.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis nihil error ipsa quibusdam numquam dignissimos libero, molestiae amet molestias explicabo, impedit quaerat at tenetur neque? Non magnam inventore deleniti placeat?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint natus inventore iure officiis molestiae dicta rerum dolore! Nostrum odit neque iusto aperiam assumenda, quia culpa perspiciatis suscipit impedit voluptatum nobis dolorem dignissimos eligendi officia at asperiores officiis quibusdam id error repudiandae saepe repellendus incidunt accusamus. Molestias doloribus explicabo debitis deleniti.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
        // Post::create([
        //     'title' => 'Judul KeEmpat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis nihil error ipsa quibusdam numquam dignissimos libero, molestiae amet molestias explicabo, impedit quaerat at tenetur neque? Non magnam inventore deleniti placeat?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint natus inventore iure officiis molestiae dicta rerum dolore! Nostrum odit neque iusto aperiam assumenda, quia culpa perspiciatis suscipit impedit voluptatum nobis dolorem dignissimos eligendi officia at asperiores officiis quibusdam id error repudiandae saepe repellendus incidunt accusamus. Molestias doloribus explicabo debitis deleniti.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
