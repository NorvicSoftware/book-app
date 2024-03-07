<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gender = new Gender();
        $gender->name = "Poesia";
        $gender->save();

        $gender2 = new Gender();
        $gender2->name = "Narrativa";
        $gender2->save();

        $gender3 = new Gender();
        $gender3->name = "Dramaturgia";
        $gender3->save();
    }
}
