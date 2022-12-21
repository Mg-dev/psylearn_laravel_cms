<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'name'=> "The Life and Crimes of the World's Greatest Art Forger",
                'description'=> 'The world’s most renowned art forger reveals the secrets behind his decades of painting like the masters—exposing an art world that is far more corrupt than we ever knew while providing an art history lesson wrapped in sex, drugs, and Caravaggio.',
            ],
            [
                'name'=> 'Looking to Sea: Britain Through the Eyes of its Artists',
                'description'=> 'An alternative history of modern Britain, Looking to Sea is an exquisite work of cultural, artistic and philosophical storytelling.',
            ],
            [
                'name'=> 'An alternative history of modern Britain, Looking to Sea is an exquisite work of cultural, artistic and philosophical storytelling.',
                'description'=> 'From the Pulitzer Prize winner and bestselling author of How to Be an Artist: a deliciously readable survey of the art world in turbulent times',
            ],
            [
                'name'=> "The Life and Crimes of the World's Greatest Art Forger",
                'description'=> 'The world’s most renowned art forger reveals the secrets behind his decades of painting like the masters—exposing an art world that is far more corrupt than we ever knew while providing an art history lesson wrapped in sex, drugs, and Caravaggio.',
            ],
            [
                'name'=> 'Looking to Sea: Britain Through the Eyes of its Artists',
                'description'=> 'An alternative history of modern Britain, Looking to Sea is an exquisite work of cultural, artistic and philosophical storytelling.',
            ],
            [
                'name'=> 'An alternative history of modern Britain, Looking to Sea is an exquisite work of cultural, artistic and philosophical storytelling.',
                'description'=> 'From the Pulitzer Prize winner and bestselling author of How to Be an Artist: a deliciously readable survey of the art world in turbulent times',
            ]
        ];

    DB::table('books')->insert($books);
    }
}
