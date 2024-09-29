<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'role' => ('admin'),
        ]);
        Post::factory()->create(
            [
                'title' => 'Belajar Laravel 10',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, aliquam culpa sit iure qui, assumenda architecto maxime suscipit iusto laborum nam provident quae distinctio vitae autem unde! Ducimus, sint repellat.',
            ]
        );
    }
}