<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'ANTIPIRAI',
            'description' => 'Kategori Antipirai',
        ]);

        DB::table('categories')->insert([
            'name' => 'Nyeri Neuropatik',
            'description' => 'Kategori Neuropatik',
        ]);
    }
}
