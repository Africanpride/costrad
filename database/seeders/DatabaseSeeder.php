<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

            User::factory()->create([
                'firstName' => 'Pius',
                'lastName' => 'Opoku-Fofie',
                'email' => 'webmaster@costrad.org',
                'email_verified_at' => now(),
                'password' => Hash::make('123Ghana'),
                'remember_token' => Str::random(10),
            ]);
            $this->command->info("Admin User Creation Done");

            $this->call([
                RolesPermissionSeeder::class
            ]);
            $this->command->info("Roles & Permissions Created!");

            $this->call([
                InstituteSeeder::class
            ]);

            $this->command->info("Institutes & College Created!");

        }

    }
}
