<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Record;
use Faker\Generator as Faker;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 100; $i++ ) {
            $record = new Record;
            $record->title = $faker->word();
            $record->album = $faker->word(3, true);
            $record->author = $faker->name();
            $record->year = $faker->year();
            $record->editor = $faker->company();
            $record->length = $faker->time('i:s');
            $record->poster = 'https://picsum.photos/300/500';

            $record->save();
        }
        
    }
}