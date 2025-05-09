<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $movies = [
            [
                'title' => 'Star Wars: Episode I – The Phantom Menace',
                'description' => 'Set 32 years before the original trilogy, the film follows Jedi Master Qui-Gon Jinn and his apprentice Obi-Wan Kenobi as they protect Queen Padmé Amidala of Naboo, while young Anakin Skywalker begins to manifest strong Force abilities...',
                'release_date' => 1999,
                'image_url' => null,
            ],
            [
                'title' => 'Star Wars: Episode II – Attack of the Clones',
                'description' => 'Ten years after Episode I, Obi-Wan Kenobi investigates an assassination attempt on Senator Padmé Amidala and discovers a clone army, while Anakin Skywalker protects Amidala and begins a secret romance with her...',
                'release_date' => 2002,
                'image_url' => null,
            ],
            [
                'title' => 'Star Wars: Episode III – Revenge of the Sith',
                'description' => 'Set three years into the Clone Wars, the film depicts the rise of Darth Sidious and the Galactic Empire as Anakin Skywalker succumbs to the dark side of the Force...',
                'release_date' => 2005,
                'image_url' => null,
            ],
            [
                'title' => 'Star Wars: Episode IV – A New Hope',
                'description' => 'Set under the rule of the Galactic Empire, the film follows Rebel fighters who aim to destroy the Empire\'s Death Star. When Princess Leia is captured, Luke Skywalker obtains the Death Star plans and, guided by Obi-Wan Kenobi, sets out to rescue her while learning the ways of the Force...',
                'release_date' => 1977,
                'image_url' => null,
            ],
            [
                'title' => 'Star Wars: Episode V – The Empire Strikes Back',
                'description' => 'Set three years after A New Hope, the Rebel Alliance battles the Galactic Empire. Luke Skywalker trains to master the Force while Darth Vader pursues Han Solo and Princess Leia, culminating in a confrontation between Vader and Luke...',
                'release_date' => 1980,
                'image_url' => null,
            ],
            [
                'title' => 'Star Wars: Episode VI – Return of the Jedi',
                'description' => 'The Rebel Alliance attempts to destroy the Empire’s second Death Star, while Luke Skywalker seeks to bring his father Darth Vader back to the light side of the Force...',
                'release_date' => 1983,
                'image_url' => null,
            ],
            [
                'title' => 'Star Wars: Episode VII – The Force Awakens',
                'description' => 'Set 30 years after Return of the Jedi, The Force Awakens follows new heroes Rey, Finn, and Poe Dameron as they join Han Solo and Leia Organa to find Luke Skywalker and battle the First Order led by Kylo Ren:contentReference[oaicite:6]{index=6}.',
                'release_date' => 2015,
                'image_url' => null,
            ],
            [
                'title' => 'Star Wars: Episode VIII – The Last Jedi',
                'description' => 'The Last Jedi follows Rey seeking Luke Skywalker’s help to save the Resistance from the First Order, while Leia Organa, Finn, and Poe Dameron attempt to escape a First Order attack on the dwindling Resistance fleet:contentReference[oaicite:7]{index=7}.',
                'release_date' => 2017,
                'image_url' => null,
            ],
            [
                'title' => 'Star Wars: Episode IX – The Rise of Skywalker',
                'description' => 'Set after The Last Jedi, The Rise of Skywalker follows Rey, Finn, and Poe Dameron as they lead the remaining Resistance in a final stand against Kylo Ren and the First Order, supported by the resurrected Emperor Palpatine:contentReference[oaicite:8]{index=8}.',
                'release_date' => 2019,
                'image_url' => null,
            ],
        ];
        
        foreach ($movies as $movie) {
            Movie::create([
                'title' => $movie['title'],
                'description' => $movie['description'],
                'release_date' => $movie['release_date'],
                'image' => $movie['image_url'],
            ]);
        }
    }
}