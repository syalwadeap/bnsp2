<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => 'admin',
            ]
            ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
