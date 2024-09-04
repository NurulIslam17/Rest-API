<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            "name" => "User1",
            "email"=>"user1@app.com",
            "password"=>bcrypt("password")
        ]);
        User::create([
            "name" => "User2",
            "email"=>"user2@app.com",
            "password"=>bcrypt("password")
        ]);
    }
}
