<?php

use App\Stationary;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'stationary_id'=>1,
            'name'=>'Notes',
            'stock'=>52,
            'price'=>30000,
            'description'=>'For writing only',
            'image'=>'book-1.jpg'
        ]);

        DB::table('items')->insert([
            'stationary_id'=>1,
            'name'=>'Mountain View',
            'stock'=>50,
            'price'=>50000,
            'description'=>'For writing and liking mountains',
            'image'=>'book-2.jpg'
        ]);

        DB::table('items')->insert([
            'stationary_id'=>1,
            'name'=>'Pinks',
            'stock'=>70,
            'price'=>60000,
            'description'=>'For girls who likes to write',
            'image'=>'book-3.jpg'
        ]);


        DB::table('items')->insert([
            'stationary_id'=>2,
            'name'=>'Rainbow Pen',
            'stock'=>42,
            'price'=>20000,
            'description'=>'Rainbow Colors',
            'image'=>'pen-1.jpg'
        ]);

        DB::table('items')->insert([
            'stationary_id'=>2,
            'name'=>'Pen',
            'stock'=>120,
            'price'=>22000,
            'description'=>'A normal pen for a normal person',
            'image'=>'pen-2.jpg'
        ]);

        DB::table('items')->insert([
            'stationary_id'=>2,
            'name'=>'Makeup Pencil',
            'stock'=>45,
            'price'=>10000,
            'description'=>'Its actually for makeup and not writing',
            'image'=>'pen-3.jpg'
        ]);

        DB::table('items')->insert([
            'stationary_id'=>2,
            'name'=>'Pens',
            'stock'=>20,
            'price'=>20000,
            'description'=>'Pen with green and blue color',
            'image'=>'pen-4.jpg'
        ]);

        DB::table('items')->insert([
            'stationary_id'=>3,
            'name'=>'Transparent Ruler',
            'stock'=>60,
            'price'=>25000,
            'description'=>'Basic Ruler',
            'image'=>'ruler-1.jpg'
        ]);

        DB::table('items')->insert([
            'stationary_id'=>3,
            'name'=>'Ruler For Circles',
            'stock'=>50,
            'price'=>15000,
            'description'=>'For Drawing Circles',
            'image'=>'ruler-2.jpg'
        ]);


        DB::table('items')->insert([
            'stationary_id'=>4,
            'name'=>'Dictionary',
            'stock'=>85,
            'price'=>120000,
            'description'=>'its a dictionary',
            'image'=>'dictionary-1.jpg'
        ]);

        DB::table('items')->insert([
            'stationary_id'=>5,
            'name'=>'Smart Pen',
            'stock'=>20,
            'price'=>200000,
            'description'=>'Its actually from samsung',
            'image'=>'smartpen-1.jpg'
        ]);

        DB::table('items')->insert([
            'stationary_id'=>5,
            'name'=>'Smart Pen White',
            'stock'=>20,
            'price'=>200000,
            'description'=>'Its actually cheaper',
            'image'=>'smartpen-2.jpg'
        ]);

        DB::table('items')->insert([
            'stationary_id'=> 6,
            'name'=>'Smart Note',
            'stock'=>40,
            'price'=>400000,
            'description'=>'A smart-note but also expensive',
            'image'=>'smartnote-1.jpg'
        ]);
      
    }
}
