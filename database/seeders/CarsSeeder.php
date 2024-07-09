<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
// {             
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//     Cars ::create([
//         'photo'=>null,
//         'model'=> 'Test model 1',
//         'title'=> 'Test title 1',
//         'price'=> '20000$',
//         'description' => 'Lorem ispum dolor sit amet'
//     ]);
//     Cars ::create([
//         'photo'=>null,
//         'model'=> 'Test model 2',
//         'title'=> 'Test title 2',
//         'price'=> '20000$',
//         'description' => 'Lorem ispum dolor sit amet'
//     ]);
       Cars :: factory()->count(10)->create();
//     }
// }




