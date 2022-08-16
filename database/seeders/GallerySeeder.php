<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'gallery' => 'uploads/gallery1.jpg'
            ]
        ]);
        DB::table('galleries')->insert([
            [
                'gallery' => 'uploads/gallery2.jpg'
            ]
        ]);
        DB::table('galleries')->insert([
            [
                'gallery' => 'uploads/gallery3.jpg'
            ]
        ]);
        DB::table('galleries')->insert([
            [
                'gallery' => 'uploads/gallery4.jpg'
            ]
        ]);
        DB::table('galleries')->insert([
            [
                'gallery' => 'uploads/gallery5.jpg'
            ]
        ]);
        DB::table('galleries')->insert([
            [
                'gallery' => 'uploads/gallery6.jpg'
            ]
        ]);

    }
}
