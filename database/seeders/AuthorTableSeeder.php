<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->delete();
        $authors = [
            [
                'id' => '2',
                'name' => 'Jon Erickson',
            ],
            [
                'id' => '3',
                'name' => 'Stuart McClure',
            ],
            [
                'id' => '4',
                'name' => 'Joel Scambray',
            ],
            [
                'id' => '5',
                'name' => 'George Kurtz',
            ],
            [
                'id' => '6',
                'name' => 'Haruki Murakami',
            ],
            [
                'id' => '7',
                'name' => 'Yuval Noah Harari',
            ],
            [
                'id' => '8',
                'name' => 'Oleg Surajev',
            ],
            [
                'id' => '9',
                'name' => 'Andrius Tapinas',
            ],
            [
                'id' => '10',
                'name' => 'George Orwell',
            ],
            [
                'id' => '11',
                'name' => 'Jordan B. Peterson',
            ],
            [
                'id' => '12',
                'name' => 'Anthony Burgess',
            ],
            [
                'id' => '13',
                'name' => 'Erich Fromm',
            ],
            [
                'id' => '14',
                'name' => 'Dovydas Pancerovas',
            ],
            [
                'id' => '15',
                'name' => 'Birutė Davidonytė',
            ],
            [
                'id' => '16',
                'name' => 'Mark Manson',
            ]
        ];
        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
