<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Ticket;
use App\Models\User;
use Database\Factories\TicketFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(1000)
            ->create();
    }
}
