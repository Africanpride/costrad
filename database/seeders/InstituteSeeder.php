<?php

namespace Database\Seeders;

use App\Models\Institute;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $data = [
            [
                'name' => 'Family Development Institute',
                'acronym' => 'fdi',
                'price' => '99.00',
                'active' => 1,
                'startDate' => '2023-03-13',
                'endDate' => '2023-03-13',
                'about' => 'fdi',
                'overview' => 'fdi',
                'slug' => 'family-development-institute',
                'seo' => 'Family Development, Family Institute, Family Growth, Family Therapy, Family Counseling, Family Support,  Family Health Programs',
            ],

            // Add more objects here
        ];

        foreach ($data as $item) {
            Institute::create($item);
        }
    }
}
