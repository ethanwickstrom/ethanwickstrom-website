<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(ArticleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(ContactMessagesSeeder::class);
        $this->call(LikeSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(PhotoCollectionSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(UserSeeder::class);
    }
}
