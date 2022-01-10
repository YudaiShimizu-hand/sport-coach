<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'id' => 1,
            'login_id' => 1,
            'name' => '太郎',
            'comment' => 'ヤッホー',
        ]);
    }
}
