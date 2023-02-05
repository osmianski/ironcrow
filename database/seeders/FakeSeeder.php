<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Ticket;
use App\Models\User;
use Database\Factories\TicketFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
        ]);
    }
}
