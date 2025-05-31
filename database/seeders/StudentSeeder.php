<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = Student::create(['name' => 'Алёна Окотчик']);

        $student->grades()->createMany([
            ['score' => 9, 'received_at' => Carbon::parse(2023-3-24)],
            ['score' => 10, 'received_at' => Carbon::parse(2023-4-13)],
            ['score' => 7, 'received_at' => Carbon::parse(2023-5-28)],
            ['score' => 8, 'received_at' => Carbon::parse(2023-6-31)],
        ]);
    }
}
