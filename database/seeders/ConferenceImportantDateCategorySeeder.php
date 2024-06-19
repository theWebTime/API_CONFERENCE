<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConferenceImportantDateCategory;
class ConferenceImportantDateCategorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['category_title' => 'Conference Dates'],
            ['category_title' => 'Abstract Deadlines'],
            ['category_title' => 'Registrations Deadline'],
        ];
        ConferenceImportantDateCategory::insert($data);
    }
}
