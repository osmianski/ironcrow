<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => env('ADMIN_NAME')
                ?? throw new \Exception('Set ADMIN_NAME environment variable before running this command.'),
            'email' => env('ADMIN_EMAIL')
                ?? throw new \Exception('Set ADMIN_EMAIL environment variable before running this command.'),
            'email_verified_at' => now(),
            'password' => Hash::make(env('ADMIN_PASSWORD')
                ?? throw new \Exception('Set ADMIN_PASSWORD environment variable before running this command.')),
            'remember_token' => Str::random(10),
        ]);
    }
}
