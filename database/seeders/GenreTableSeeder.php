<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::insert([
            ['id' => Uuid::uuid4()->toString() ,'name' => 'Technology'],
            ['id' => Uuid::uuid4()->toString() ,'name' => 'Comedy'],
            ['id' => Uuid::uuid4()->toString() ,'name' => 'Sport'],
            ['id' => Uuid::uuid4()->toString() ,'name' => 'Art'],
            ['id' => Uuid::uuid4()->toString() ,'name' => 'Business'],
        ]);
    }
}
