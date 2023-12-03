<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhotoCollection;

class PhotoCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PhotoCollection::factory()
            ->count(5)
            ->create();
    }
}
