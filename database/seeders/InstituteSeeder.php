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
                'slug' => 'family-development-institute',
                'acronym' => 'fdi',
                'price' => '99.00',
                'active' => 1,
                'startDate' => '2023-03-13',
                'endDate' => '2023-03-18',
                'about' => 'fdi',
                'overview' => 'fdi',
                'seo' => 'Family Development, Family Institute, Family Growth, Family Therapy, Family Counseling, Family Support,  Family Health Programs',
            ],
            [
                'name' => 'Mindset Transformation Institute',
                'slug' => 'mindset-transformation-institute',
                'acronym' => 'mti',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-04-01',
                'endDate' => '2023-04-05',
                'about' => 'MTI',
                'overview' => 'MTI',
                'seo' => 'Mindset Transformation, Self-improvement, Personal Growth, Mental Health, Positive Thinking, Mindfulness',
            ],

            [
                'name' => 'Institute of Governance & Public Policy',
                'slug' => 'institute-of-governance-and-public-policy',
                'acronym' => 'igpp',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-05-10',
                'endDate' => '2023-05-15',
                'about' => 'Igpp',
                'overview' => 'Igpp',
                'seo' => 'Governance, Public Policy, Political Science, Public Administration, Civic Education, Democracy, Leadership',
            ],

            [
                'name' => 'Institute of Economic Affairs',
                'slug' => 'institute-of-economic-affairs',
                'acronym' => 'iea',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-06-21',
                'endDate' => '2023-06-26',
                'about' => 'Iea',
                'overview' => 'Iea',
                'seo' => 'Economic Affairs, Economics, Economic Development, Economic Policy, Macroeconomics, Microeconomics, Business Strategy',
            ],
            [
                'name' => 'College of Sustainable Transformation & Development',
                'slug' => 'college-of-sustainable-transformation-and-development',
                'acronym' => 'costrad',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-07-14',
                'endDate' => '2023-07-19',
                'about' => 'Costrad',
                'overview' => 'Costrad',
                'seo' => 'Sustainable Development, Environmental Science, Green Technology, Renewable Energy, Climate Change, Circular Economy, Corporate Sustainability',
            ],

            [
                'name' => 'Education, Training & Development Institute',
                'slug' => 'education-training-and-development-institute',
                'acronym' => 'etadi',
                'price' => '99.990',
                'active' => 1,
                'startDate' => '2023-08-09',
                'endDate' => '2023-08-14',
                'about' => 'Etadi',
                'overview' => 'Etadi',
                'seo' => 'Education, Training, Development, Adult Learning, Instructional Design, Curriculum Development, E-learning',
            ],

            [
                'name' => 'Futuristic Institute of Revolutionary Science & Technology',
                'slug' => 'futuristic-institute-of-revolutionary-science-and-technology',
                'acronym' => 'first',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-09-27',
                'endDate' => '2023-10-02',
                'about' => 'First',
                'overview' => 'First',
                'seo' => 'Science, Technology, Innovation, Futuristic, Robotics, Artificial Intelligence, Quantum Computing, Space Exploration',
            ],

            [
                'name' => 'Media of Communication Institute',
                'slug' => 'media-of-communication-institute',
                'acronym' => 'moci',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-11-15',
                'endDate' => '2023-11-20',
                'about' => 'Moci',
                'overview' => 'Moci',
                'seo' => 'Media, Communication, Journalism, Public Relations, Advertising, Digital Marketing, Mass Communication',
            ],

            [
                'name' => 'Institute of Arts, Sports and Cultural Development',
                'slug' => 'institute-of-arts-sports-and-cultural-development',
                'acronym' => 'ioasc',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-12-06',
                'endDate' => '2023-12-11',
                'about' => 'Ioasc',
                'overview' => 'Ioasc',
                'seo' => 'Arts, Sports, Culture, Creativity, Performance, Music, Dance, Theater, Visual Arts',
            ]

        ];

        foreach ($data as $item) {
            Institute::create($item);
        }
    }
}
