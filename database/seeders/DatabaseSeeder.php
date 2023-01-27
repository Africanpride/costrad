<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
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
        if (App::environment(['local', 'staging']) ){
            if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {

                // Call the php artisan migrate:fresh using Artisan
                $this->command->call('migrate:fresh');

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
            $this->command->info("Admin User Creation Done");

            // How many users you need, defaulting to 20
            $numberOfUser = $this->command->ask('How many users do you need ?', 20);
            $this->command->info("Now creating {$numberOfUser} users ......");

            \App\Models\User::factory($numberOfUser)->create();

            $this->command->info(`{$numberOfUser} Users Created!`);

            $this->command->info('Running Remaining Seeder jobs: Patient etc....');

            $numberOfPatients = $this->command->ask('How many patients do you need?' , 50);

            \App\Models\Patient::factory($numberOfPatients)->create();
        }

    }
}
