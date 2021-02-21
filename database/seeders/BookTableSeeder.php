<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete();
        $books = [
            [
                'id' => '4',
                'name' => 'Hakingas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2020-02-21 12:12:12',
                'price' => '20',
                'discount' => '0',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '5',
                'name' => 'Apsauga nuo Hakerių',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-01-21 12:12:12',
                'price' => '30',
                'discount' => '10',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '6',
                'name' => 'Kafka pakrantėje',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '25',
                'discount' => '5',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '7',
                'name' => 'Negailestinga stebuklų šalis ir Pasaulio galas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-01-21 12:12:12',
                'price' => '19',
                'discount' => '0',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '8',
                'name' => 'Sapiens - glausta žmonijos istorija',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '99',
                'discount' => '0',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '9',
                'name' => 'Knygą gali parašyti bet kas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '30',
                'discount' => '10',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '10',
                'name' => 'Prezidentas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-01-21 12:12:12',
                'price' => '38',
                'discount' => '15',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '11',
                'name' => '1984',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '40',
                'discount' => '0',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '12',
                'name' => 'Prisukamas apelsinas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '40',
                'discount' => '0',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '13',
                'name' => 'Gyvulių ūkis',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '40',
                'discount' => '0',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '14',
                'name' => 'Žmogaus destruktyvumo anatomija - I tomas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '40',
                'discount' => '0',
                'user_id' => 1,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '15',
                'name' => 'Žmogaus destruktyvumo anatomija - II tomas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '40',
                'discount' => '0',
                'user_id' => 1,
                'status' => Book::UNCONFIRMED
            ],
            [
                'id' => '16',
                'name' => 'Kabinetas 339',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '40',
                'discount' => '0',
                'user_id' => 1,
                'status' => Book::UNCONFIRMED
            ],
            [
                'id' => '17',
                'name' => 'Subtilus menas nekrušti sau proto',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '40',
                'discount' => '0',
                'user_id' => 2,
                'status' => Book::ACTIVE
            ],
            [
                'id' => '18',
                'name' => '12 rules for life',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => '2021-02-21 12:12:12',
                'price' => '40',
                'discount' => '0',
                'user_id' => 2,
                'status' => Book::UNCONFIRMED
            ]
        ];
        $genres = [
            '4' => [6],
            '5' => [6],
            '6' => [5],
            '7' => [5],
            '8' => [6],
            '9' => [5],
            '10' => [5],
            '11' => [5],
            '12' => [5],
            '13' => [5],
            '14' => [3],
            '15' => [3],
            '16' => [3],
            '17' => [3],
            '18' => [3]
        ];
        $authors = [
            '4' => [2],
            '5' => [3,4,5],
            '6' => [6],
            '7' => [6],
            '8' => [7],
            '9' => [8],
            '10' => [9],
            '11' => [10],
            '12' => [12],
            '13' => [10],
            '14' => [13],
            '15' => [13],
            '16' => [15],
            '17' => [16],
            '18' => [11],
        ];
        foreach ($books as $book) {
            $newBook = Book::create($book);
            $newBook->authors()->sync($authors[$newBook->id]);
            $newBook->genres()->sync($genres[$newBook->id]);
        }
    }
}
