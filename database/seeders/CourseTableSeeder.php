<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course')->insert([
            [
                'course_title' => 'Laravel',
                'course_content' => 'Laravel kurs iceriği',
                'course_must' => 1
            ],
            [
            'course_title' => 'CSS',
            'course_content' => 'CSS kurs iceriği',
            'course_must' => 2
            ],
            [
                'course_title' => 'JS',
                'course_content' => 'JS kurs iceriği',
                'course_must' => 3
            ],
            [
                'course_title' => 'React',
                'course_content' => 'React kurs iceriği',
                'course_must' => 4
            ]
        ]);
    }
}
