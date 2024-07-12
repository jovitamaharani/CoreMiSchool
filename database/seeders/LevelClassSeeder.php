<?php

namespace Database\Seeders;

use App\Models\LevelClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $class = [
            'Kelas 10',
            'Kelas 11',
            'Kelas 12',
        ];

        foreach ($class as $index => $data) {
            LevelClass::create([
                'name' => $data,
                'school_id' => '1',
            ]);
        };
    }
}
