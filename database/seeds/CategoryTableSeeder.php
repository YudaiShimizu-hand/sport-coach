<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Basketball',
        ]);
    
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Valleyball',
        ]);
    
    
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Handball',
        ]);
    
    
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Baseball',
        ]);
    
    
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Tennis',
        ]);
    
    
        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'TableTennis',
        ]);

        DB::table('categories')->insert([
            'id' => 7,
            'name' => 'Soccer',
        ]);
    
    
        DB::table('categories')->insert([
            'id' => 8,
            'name' => 'Rugby',
        ]);
    
    
        DB::table('categories')->insert([
            'id' => 9,
            'name' => 'AmericanFootball',
        ]);

    
        DB::table('categories')->insert([
            'id' => 10,
            'name' => 'Golf',
        ]);
    
    
        DB::table('categories')->insert([
            'id' => 11,
            'name' => 'Swiming',
        ]);
    
    
        DB::table('categories')->insert([
            'id' => 12,
            'name' => 'Suki',
        ]);
    
    
        DB::table('categories')->insert([
            'id' => 13,
            'name' => 'TrackAndField',
        ]);
    
    
        DB::table('categories')->insert([
            'id' => 14,
            'name' => 'Gymnastics',
        ]);
    }
}
