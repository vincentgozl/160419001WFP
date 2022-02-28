<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicine')->insert([
            'name' => 'alopurinol',
            'form' => 'tab 100 mg*',
            'formula' => '30 tab/bulan',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'category_id' => 1,
            'faskes_1' => true,
            'faskes_2' => true,
            'faskes_3' => true,
            'price' => 10.000,
        ]);

        DB::table('medicine')->insert([
            'name' => 'kolkisin',
            'form' => 'tab 500 mcg',
            'formula' => '30 tab/bulan',
            'description' => '-',
            'category_id' => 1,
            'faskes_1' => true,
            'faskes_2' => true,
            'faskes_3' => true,
            'price' => 20000,
        ]);

        DB::table('medicine')->insert([
            'name' => 'amitriptilin',
            'form' => 'tab 25 mg',
            'formula' => '30 tab/bulan',
            'description' => '-',
            'category_id' => 2,
            'faskes_1' => true,
            'faskes_2' => true,
            'faskes_3' => true,
            'price' => 5000,
        ]);

        DB::table('medicine')->insert([
            'name' => 'gabapentin',
            'form' => 'kaps 100 mg',
            'formula' => '60 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes
            atau nyeri neuropati diabetikum.',
            'category_id' => 2,
            'faskes_1' => false,
            'faskes_2' => true,
            'faskes_3' => true,
            'price' => 6000,
        ]);
    }
}
