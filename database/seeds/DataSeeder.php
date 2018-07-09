<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(['name'=>'Получение письма']);
        DB::table('tasks')->insert(['name'=>'Отправка письма']);
        DB::table('tasks')->insert(['name'=>'Получение посылки']);
        DB::table('tasks')->insert(['name'=>'Отправка посылки']);
    }
}
