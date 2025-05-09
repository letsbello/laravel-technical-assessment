<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 actors
        $actors = [
            [
                'name' => 'Adam Driver',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Adam_Driver_2023_%28cropped%29.png/500px-Adam_Driver_2023_%28cropped%29.png'
            ],
            [
                'name' => 'Ahmed Best',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/10.2.10AhmedBestByLuigiNovi.jpg/500px-10.2.10AhmedBestByLuigiNovi.jpg'
            ],
            [
                'name' => 'Alec Guinness',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Sir_Alec_Guinness_Allan_Warren.jpg/500px-Sir_Alec_Guinness_Allan_Warren.jpg'
            ],
            [
                'name' => 'Andy Serkis',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Andy_Serkis_at_MEGACON_Orlando_2025.png/500px-Andy_Serkis_at_MEGACON_Orlando_2025.png'
            ],
            [
                'name' => 'Anthony Daniels',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Anthony_Daniels_2011.jpg/500px-Anthony_Daniels_2011.jpg'
            ],
            [
                'name' => 'Benicio del Toro',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Benicio_Del_Toro_-_Guardians_of_the_Galaxy_premiere_-_July_2014_%28cropped%29.jpg/500px-Benicio_Del_Toro_-_Guardians_of_the_Galaxy_premiere_-_July_2014_%28cropped%29.jpg'
            ],
            [
                'name' => 'Billy Dee Williams',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Billy_Dee_Williams_Photo_Op_GalaxyCon_Raleigh_2023_%28cropped%29.jpg/500px-Billy_Dee_Williams_Photo_Op_GalaxyCon_Raleigh_2023_%28cropped%29.jpg'
            ],
            [
                'name' => 'Carrie Fisher',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Carrie_Fisher_2013-a_straightened.jpg/500px-Carrie_Fisher_2013-a_straightened.jpg'
            ],
            [
                'name' => 'Christopher Lee',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Christopher_Lee_2009.jpg/500px-Christopher_Lee_2009.jpg'
            ],
            [
                'name' => 'Daisy Ridley',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Daisy_Ridley_Our_Movie_Guide_2024.png/500px-Daisy_Ridley_Our_Movie_Guide_2024.png'
            ],
            [
                'name' => 'David Prowse',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/David_Prowse_2013.jpg/500px-David_Prowse_2013.jpg'
            ],
            [
                'name' => 'Domhnall Gleeson',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Domhnall_Gleeson_by_Gage_Skidmore.jpg/500px-Domhnall_Gleeson_by_Gage_Skidmore.jpg'
            ],
            [
                'name' => 'Ewan McGregor',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/EwanMcGregor2023.jpg/500px-EwanMcGregor2023.jpg'
            ],
            [
                'name' => 'Frank Oz',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Frank_Oz_2012.jpg/500px-Frank_Oz_2012.jpg'
            ],
            [
                'name' => 'Gwendoline Christie',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6e/Gwendoline_christie_by_sachyn_mital_%28cropped2%29.jpg'
            ],
            [
                'name' => 'Harrison Ford',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Harrison_Ford_by_Gage_Skidmore_3.jpg/500px-Harrison_Ford_by_Gage_Skidmore_3.jpg'
            ],
            [
                'name' => 'Hayden Christensen',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Hayden_Christensen_-_GalaxyCon_Columbus_2024_%28A20929%29.jpg/500px-Hayden_Christensen_-_GalaxyCon_Columbus_2024_%28A20929%29.jpg'
            ],
            [
                'name' => 'Ian McDiarmid',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Ian_McDiarmid_Brussels_Comic_Con_2020.jpg/500px-Ian_McDiarmid_Brussels_Comic_Con_2020.jpg'
            ],
            [
                'name' => 'James Earl Jones',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/James_Earl_Jones_Baltimore.jpg/500px-James_Earl_Jones_Baltimore.jpg'
            ],
            [
                'name' => 'Jake Lloyd',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/10.2.10JakeLloydByLuigiNovi.jpg/500px-10.2.10JakeLloydByLuigiNovi.jpg'
            ],
            [
                'name' => 'John Boyega',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/John_Boyega_by_Gage_Skidmore.jpg/500px-John_Boyega_by_Gage_Skidmore.jpg'
            ],
            [
                'name' => 'Joonas Suotamo',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Joonas_Suotamo_%28cropped%29.jpg/500px-Joonas_Suotamo_%28cropped%29.jpg'
            ],
            [
                'name' => 'Kenny Baker',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Kenny_Baker_at_Star_Wars_Celebration_VI_%287868145702%29.jpg/500px-Kenny_Baker_at_Star_Wars_Celebration_VI_%287868145702%29.jpg'
            ],
            [
                'name' => 'Kelly Marie Tran',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Kelly_Marie_Tran_on_MTV_International.jpg/500px-Kelly_Marie_Tran_on_MTV_International.jpg'
            ],
            [
                'name' => 'Keri Russell',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Keri_Russell_%2813948636905%29_%28cropped%29.jpg/500px-Keri_Russell_%2813948636905%29_%28cropped%29.jpg'
            ],
            [
                'name' => 'Laura Dern',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Laura_Dern_Deauville_2017.jpg/500px-Laura_Dern_Deauville_2017.jpg'
            ],
            [
                'name' => 'Liam Neeson',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Liam_Neeson_at_2008_TIFF_%28cropped%29_%28HQ%29.jpg/500px-Liam_Neeson_at_2008_TIFF_%28cropped%29_%28HQ%29.jpg'
            ],
            [
                'name' => 'Lupita Nyong\'o',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Lupita_Nyong%27o_by_Gage_Skidmore_4.jpg/500px-Lupita_Nyong%27o_by_Gage_Skidmore_4.jpg'
            ],
            [
                'name' => 'Mark Hamill',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Mark_Hamill_by_Gage_Skidmore_4.jpg/500px-Mark_Hamill_by_Gage_Skidmore_4.jpg'
            ],
            [
                'name' => 'Max von Sydow',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Max_von_Sydow_Cannes_2016.jpg/500px-Max_von_Sydow_Cannes_2016.jpg'
            ],
            [
                'name' => 'Naomi Ackie',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Naomi_Ackie.png/500px-Naomi_Ackie.png'
            ],
            [
                'name' => 'Natalie Portman',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Natalie_Portman_2023.jpg/500px-Natalie_Portman_2023.jpg'
            ],
            [
                'name' => 'Oscar Isaac',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/OscarIsaac-byPhilipRomano.jpg/500px-OscarIsaac-byPhilipRomano.jpg'
            ],
            [
                'name' => 'Pernilla August',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Pernilla_August.jpg/500px-Pernilla_August.jpg'
            ],
            [
                'name' => 'Peter Cushing',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Peter_Cushing_%28crop%29.jpg/500px-Peter_Cushing_%28crop%29.jpg'
            ],
            [
                'name' => 'Peter Mayhew',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Peter_Mayhew_2015.jpg/500px-Peter_Mayhew_2015.jpg'
            ],
            [
                'name' => 'Richard E. Grant',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Richard_E._Grant_2018_%28cropped%29.jpg/500px-Richard_E._Grant_2018_%28cropped%29.jpg'
            ],
            [
                'name' => 'Samuel L. Jackson',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/SamuelLJackson.jpg/500px-SamuelLJackson.jpg'
            ],
        ];
        
        foreach ($actors as $actorData) {
            $actor = Actor::create($actorData);
        }
        
    }
}