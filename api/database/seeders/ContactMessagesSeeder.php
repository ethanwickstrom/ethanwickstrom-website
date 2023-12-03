<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactMessages;

class ContactMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactMessages::factory()
            ->count(5)
            ->create();
    }
}
