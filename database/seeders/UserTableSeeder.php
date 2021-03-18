<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(User::class, 10)->create();
        \App\Models\User::factory(10)->create();
        /* User::create([
            'name' => 'António Jacinto',
            'email' => 'antjacito11672@gmail.com',
            'password' => bcrypt('123456'),
        ]); */
    }
}
