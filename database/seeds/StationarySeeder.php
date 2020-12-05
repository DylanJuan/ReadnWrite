<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stationaries')->insert([
            'name'=>'Book',
            'image'=>'book.jpg'
        ]);

        DB::table('stationaries')->insert([
            'name'=>'Pen',
            'image'=>'pen.jpg'
        ]);

        DB::table('stationaries')->insert([
            'name'=>'Ruler',
            'image'=>'ruler.jpg'
        ]);

        DB::table('stationaries')->insert([
            'name'=>'Dictionary',
            'image'=>'dictionary.jpg'
        ]);

        DB::table('stationaries')->insert([
            'name'=>'Smart Pen',
            'image'=>'smartpen.jpg'
        ]);

        DB::table('stationaries')->insert([
            'name'=>'Smart Note',
            'image'=>'smartnote.jpg'
        ]);
    }
}
