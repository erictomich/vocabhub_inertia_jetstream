<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Subject;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parentSubject = Subject::where('slug', 'education')->first();

        $subjects = [
            [
                'subject' => 'Early childhood education',
                'parent_subject_id' => $parentSubject->id,
                'order' => 0,
                'slug' => 'early-childhood-education',
            ],
            [
                'subject' => 'Primary education',
                'parent_subject_id' => $parentSubject->id,
                'order' => 0,
                'slug' => 'primary-education',
            ],
            [
                'subject' => 'Secondary education',
                'parent_subject_id' => $parentSubject->id,
                'order' => 0,
                'slug' => 'secondary-education',
            ],
        ];

        DB::table('subject')->insert(
            array_map(function ($subject) use ($parentSubject) {
                return [
                    'subject' => $subject['subject'],
                    'parent_subject_id' => $parentSubject->id,
                    'order' => $subject['order'],
                    'slug' => $subject['slug'],
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }, $subjects)
        );
    }
}
