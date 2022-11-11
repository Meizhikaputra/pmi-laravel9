<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\DataPendonor;
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

        User::create([
            'name' => 'Meizhika Putra',
            'username' => 'meizhika',
            'email' => 'meizhika@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Selly',
            'username' => 'selly',
            'email' => 'selly@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();




        Post::factory(20)->create();
    }
}
