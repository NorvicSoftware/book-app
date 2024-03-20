<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = new Profile();
        $profile->biography = "La retórica los ha clasificado en cinco grupos importantes: narrativo, lírico, poética, dramático, y género didáctico";
        $profile->website = "www.tulibro.com";
        $profile->save();

        $profile2 = new Profile();
        $profile2->biography = "Usualmente se habla de los géneros literarios modernos, para referirse a los actuales: narrativa, poesía, dramaturgia y ensayo;";
        $profile2->website = "www.tulibro.com";
        $profile2->save();

        $profile3 = new Profile();
        $profile3->biography = "Subgéneros líricos · La canción. Relacionada con cuestiones amorosas, sentimientos o emociones.";
        $profile3->website = "www.donbosco.com";
        $profile3->save();
    }
}
