<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'=>'Meilinda',
            'email'=>'meilinda@gmail.com',
            'password'=>bcrypt('linda'),
            'remember_token'=>Str::random(60),
            'role'=>'Admin',
            'is_aktif'=>true,
            'foto'=>'admin.png'
        ]);
    }
}