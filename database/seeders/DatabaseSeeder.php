<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

//para crear carpetas

//
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $folder = public_path('storage/posts');
        if (File::exists($folder)) {
            File::deleteDirectory($folder);
        }
        File::makeDirectory($folder);

        // $directory = 'posts';
        // Storage::deleteDirectory('posts');
        // Storage::makeDirectory('posts');

        // Storage::makeDirectory('posts'); //creando la carpeta posts

        // \App\Models\User::factory(10)->create();
        // vamos a llamar a nuestro UserSeeder

        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Tag::factory(8)->create();
        $this->call(PostSeeder::class);
    }
}