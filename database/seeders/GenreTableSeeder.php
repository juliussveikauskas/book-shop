<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->delete();
        $genres = [
            [
                'id' => '3',
                'name' => 'Psychology',
            ],
            [
                'id' => '4',
                'name' => 'Detective',
            ],
            [
                'id' => '5',
                'name' => 'Fiction',
            ],
            [
                'id' => '6',
                'name' => 'Science',
            ]
        ];
        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
