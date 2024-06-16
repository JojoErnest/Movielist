<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
        [
            'name' => 'Justice Forum 2022',
            'type' => 'Forum',
            'description' => 'Hybrid forum event addressing information about justice.',
            'thumbnail_url' => 'event001.jpg',
            'organizer' => 'Justice Forum Committee',
            'location' => 'Hybrid (Joyous Hotel Jalan Sudirman No 9 Jakarta and Live Streaming on YouTube)',
            'date_start' => '2022-12-08 09:00:00',
            'date_end' => '2022-12-09 15:00:00',
            'created_at' => Carbon::now()->setTimezone('Asia/Jakarta')
        ],
        [
            'name' => 'Career Seminar by CALS Bank',
            'type' => 'Seminar',
            'description' => 'A seminar for the well-planned preparation of your professional career.',
            'thumbnail_url' => 'event002.jpg',
            'organizer' => 'CALS Bank',
            'location' => 'Jakarta Convention Center',
            'date_start' => '2022-12-15 14:00:00',
            'date_end' => '2022-12-15 16:00:00',
            'created_at' => Carbon::now()->setTimezone('Asia/Jakarta')
        ],
        [
            'name' => 'Sustainable Development Goals 101',
            'type' => 'Seminar',
            'description' => 'A seminar discussing about sustainability in the modern world.',
            'thumbnail_url' => 'event003.jpg',
            'organizer' => 'Project Sustainability',
            'location' => 'Online (Zoom)',
            'date_start' => '2022-12-12 15:00:00',
            'date_end' => '2022-12-12 17:00:00',
            'created_at' => Carbon::now()->setTimezone('Asia/Jakarta')
        ],
        [
            'name' => 'How to Make a Good Responsive Website: A Workshop',
            'type' => 'Workshop',
            'description' => 'A workshop for giving you tips and best practices of developing a responsive website.',
            'thumbnail_url' => 'event004.jpg',
            'organizer' => 'The Informatics Society',
            'location' => 'Online (Google Meet)',
            'date_start' => '2022-12-19 13:00:00',
            'date_end' => '2022-12-19 16:00:00',
            'created_at' => Carbon::now()->setTimezone('Asia/Jakarta')
        ],
        [
            'name' => 'INMATICS Conference 2022',
            'type' => 'Conference',
            'description' => 'A conference focusing on information technology matters, especially in robotics and machine learning.',
            'thumbnail_url' => 'event005.jpg',
            'organizer' => 'Universitas Cinta Bangsa',
            'location' => 'The Centrium',
            'date_start' => '2022-12-17 10:00:00',
            'date_end' => '2022-12-18 13:00:00',
            'created_at' => Carbon::now()->setTimezone('Asia/Jakarta')
        ]
        ]);
    }
}
