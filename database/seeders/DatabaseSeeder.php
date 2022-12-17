<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {

            // Call the php artisan migrate:refresh using Artisan
            $this->command->call('migrate:refresh');

            $this->command->line("Data cleared, starting from blank database.");
        }

        \App\Models\User::factory()->create([
            'firstName' => 'Kwame',
            'lastName' => 'Opoku',
            'email' => 'johnwelsh19@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123Ghana'),
            'remember_token' => Str::random(10),
        ]);

        // How many users you need, defaulting to 20
        $numberOfUser = $this->command->ask('How many users do you need ?', 20);
        $this->command->info("Creating {$numberOfUser} users, each will have a channel associated.");

        \App\Models\User::factory($numberOfUser)->create();

        $this->command->info('Users Created!');
    }
}
