<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => "Установка мебели",
        ]);
        DB::table('services')->insert([
            'name' => "Ремонт мебели",
        ]);

    }
}
