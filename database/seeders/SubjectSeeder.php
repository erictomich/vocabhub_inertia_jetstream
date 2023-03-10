<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subject')->insert([
            [
                'parent_subject_id' => null,
                'subject' => 'Education',
                'order' => 0,
                'slug' => 'education',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Economics',
                'order' => 0,
                'slug' => 'economics',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Health',
                'order' => 0,
                'slug' => 'health',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Employment and labor market',
                'order' => 0,
                'slug' => 'employment-and-labor-market',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Finance',
                'order' => 0,
                'slug' => 'finance',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Science',
                'order' => 0,
                'slug' => 'science',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Technology',
                'order' => 0,
                'slug' => 'technology',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Esotericism',
                'order' => 0,
                'slug' => 'esotericism',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Housing',
                'order' => 0,
                'slug' => 'housing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Culture',
                'order' => 0,
                'slug' => 'culture',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Environment & Ecology',
                'order' => 0,
                'slug' => 'environment-and-ecology',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Arts',
                'order' => 0,
                'slug' => 'arts',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'parent_subject_id' => null,
                'subject' => 'Gastronomy',
                'order' => 0,
                'slug' => 'gastronomy',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
