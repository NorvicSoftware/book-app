<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editorial;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $editorial = new Editorial();
        $editorial->name = "Editorial Don Bosco";
        $editorial->address = "America #5555";
        $editorial->phone = "45634234324";
        $editorial->save();

        $editorial2 = new Editorial();
        $editorial2->name = "Editorial San Juan de Dios";
        $editorial2->address = "Los pino #7775";
        $editorial2->save();

        $editorial3 = new Editorial();
        $editorial3->name = "Editorial Radar";
        $editorial3->address = "Los lirios #335";
        $editorial3->save();
    }
}
