<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();
        $data['name'] = "Dharmesh";
        $data['email'] = "admin@gmail.com";
        $data['password'] = bcrypt(123456);
        $data['email_verified_at'] = date('Y-m-d H:i:s');
        $data['remember_token'] = Str::random(50);
        \App\Models\User::create($data);
    }
}
