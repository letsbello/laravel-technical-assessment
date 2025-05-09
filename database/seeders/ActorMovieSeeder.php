<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ActorMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actors_movies = [
            ['actor_name' => 'Ahmed Best', 'movie_title' => 'Star Wars: Episode I – The Phantom Menace'],
            ['actor_name' => 'Anthony Daniels', 'movie_title' => 'Star Wars: Episode I – The Phantom Menace'],
            ['actor_name' => 'Ewan McGregor', 'movie_title' => 'Star Wars: Episode I – The Phantom Menace'],
            ['actor_name' => 'Frank Oz', 'movie_title' => 'Star Wars: Episode I – The Phantom Menace'],
            ['actor_name' => 'Ian McDiarmid', 'movie_title' => 'Star Wars: Episode I – The Phantom Menace'],
            ['actor_name' => 'Jake Lloyd', 'movie_title' => 'Star Wars: Episode I – The Phantom Menace'],
            ['actor_name' => 'Kenny Baker', 'movie_title' => 'Star Wars: Episode I – The Phantom Menace'],
            ['actor_name' => 'Liam Neeson', 'movie_title' => 'Star Wars: Episode I – The Phantom Menace'],
            ['actor_name' => 'Natalie Portman', 'movie_title' => 'Star Wars: Episode I – The Phantom Menace'],
            ['actor_name' => 'Pernilla August', 'movie_title' => 'Star Wars: Episode I – The Phantom Menace'],
            ['actor_name' => 'Anthony Daniels', 'movie_title' => 'Star Wars: Episode II – Attack of the Clones'],
            ['actor_name' => 'Christopher Lee', 'movie_title' => 'Star Wars: Episode II – Attack of the Clones'],
            ['actor_name' => 'Ewan McGregor', 'movie_title' => 'Star Wars: Episode II – Attack of the Clones'],
            ['actor_name' => 'Frank Oz', 'movie_title' => 'Star Wars: Episode II – Attack of the Clones'],
            ['actor_name' => 'Hayden Christensen', 'movie_title' => 'Star Wars: Episode II – Attack of the Clones'],
            ['actor_name' => 'Ian McDiarmid', 'movie_title' => 'Star Wars: Episode II – Attack of the Clones'],
            ['actor_name' => 'Kenny Baker', 'movie_title' => 'Star Wars: Episode II – Attack of the Clones'],
            ['actor_name' => 'Natalie Portman', 'movie_title' => 'Star Wars: Episode II – Attack of the Clones'],
            ['actor_name' => 'Samuel L. Jackson', 'movie_title' => 'Star Wars: Episode II – Attack of the Clones'],
            ['actor_name' => 'Anthony Daniels', 'movie_title' => 'Star Wars: Episode III – Revenge of the Sith'],
            ['actor_name' => 'Christopher Lee', 'movie_title' => 'Star Wars: Episode III – Revenge of the Sith'],
            ['actor_name' => 'Ewan McGregor', 'movie_title' => 'Star Wars: Episode III – Revenge of the Sith'],
            ['actor_name' => 'Frank Oz', 'movie_title' => 'Star Wars: Episode III – Revenge of the Sith'],
            ['actor_name' => 'Hayden Christensen', 'movie_title' => 'Star Wars: Episode III – Revenge of the Sith'],
            ['actor_name' => 'Ian McDiarmid', 'movie_title' => 'Star Wars: Episode III – Revenge of the Sith'],
            ['actor_name' => 'Kenny Baker', 'movie_title' => 'Star Wars: Episode III – Revenge of the Sith'],
            ['actor_name' => 'Natalie Portman', 'movie_title' => 'Star Wars: Episode III – Revenge of the Sith'],
            ['actor_name' => 'Samuel L. Jackson', 'movie_title' => 'Star Wars: Episode III – Revenge of the Sith'],
            ['actor_name' => 'Alec Guinness', 'movie_title' => 'Star Wars: Episode IV – A New Hope'],
            ['actor_name' => 'Anthony Daniels', 'movie_title' => 'Star Wars: Episode IV – A New Hope'],
            ['actor_name' => 'Carrie Fisher', 'movie_title' => 'Star Wars: Episode IV – A New Hope'],
            ['actor_name' => 'David Prowse', 'movie_title' => 'Star Wars: Episode IV – A New Hope'],
            ['actor_name' => 'Harrison Ford', 'movie_title' => 'Star Wars: Episode IV – A New Hope'],
            ['actor_name' => 'James Earl Jones', 'movie_title' => 'Star Wars: Episode IV – A New Hope'],
            ['actor_name' => 'Kenny Baker', 'movie_title' => 'Star Wars: Episode IV – A New Hope'],
            ['actor_name' => 'Mark Hamill', 'movie_title' => 'Star Wars: Episode IV – A New Hope'],
            ['actor_name' => 'Peter Cushing', 'movie_title' => 'Star Wars: Episode IV – A New Hope'],
            ['actor_name' => 'Peter Mayhew', 'movie_title' => 'Star Wars: Episode IV – A New Hope'],
            ['actor_name' => 'Anthony Daniels', 'movie_title' => 'Star Wars: Episode V – The Empire Strikes Back'],
            ['actor_name' => 'Billy Dee Williams', 'movie_title' => 'Star Wars: Episode V – The Empire Strikes Back'],
            ['actor_name' => 'Carrie Fisher', 'movie_title' => 'Star Wars: Episode V – The Empire Strikes Back'],
            ['actor_name' => 'David Prowse', 'movie_title' => 'Star Wars: Episode V – The Empire Strikes Back'],
            ['actor_name' => 'Frank Oz', 'movie_title' => 'Star Wars: Episode V – The Empire Strikes Back'],
            ['actor_name' => 'Harrison Ford', 'movie_title' => 'Star Wars: Episode V – The Empire Strikes Back'],
            ['actor_name' => 'Kenny Baker', 'movie_title' => 'Star Wars: Episode V – The Empire Strikes Back'],
            ['actor_name' => 'Mark Hamill', 'movie_title' => 'Star Wars: Episode V – The Empire Strikes Back'],
            ['actor_name' => 'Peter Mayhew', 'movie_title' => 'Star Wars: Episode V – The Empire Strikes Back'],
            ['actor_name' => 'Anthony Daniels', 'movie_title' => 'Star Wars: Episode VI – Return of the Jedi'],
            ['actor_name' => 'Billy Dee Williams', 'movie_title' => 'Star Wars: Episode VI – Return of the Jedi'],
            ['actor_name' => 'Carrie Fisher', 'movie_title' => 'Star Wars: Episode VI – Return of the Jedi'],
            ['actor_name' => 'David Prowse', 'movie_title' => 'Star Wars: Episode VI – Return of the Jedi'],
            ['actor_name' => 'Frank Oz', 'movie_title' => 'Star Wars: Episode VI – Return of the Jedi'],
            ['actor_name' => 'Harrison Ford', 'movie_title' => 'Star Wars: Episode VI – Return of the Jedi'],
            ['actor_name' => 'Kenny Baker', 'movie_title' => 'Star Wars: Episode VI – Return of the Jedi'],
            ['actor_name' => 'Mark Hamill', 'movie_title' => 'Star Wars: Episode VI – Return of the Jedi'],
            ['actor_name' => 'Peter Mayhew', 'movie_title' => 'Star Wars: Episode VI – Return of the Jedi'],
            ['actor_name' => 'Adam Driver', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'Andy Serkis', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'Anthony Daniels', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'Carrie Fisher', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'Domhnall Gleeson', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'Harrison Ford', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'John Boyega', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'Lupita Nyong\'o', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'Mark Hamill', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'Oscar Isaac', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'Peter Mayhew', 'movie_title' => 'Star Wars: Episode VII – The Force Awakens'],
            ['actor_name' => 'Adam Driver', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Andy Serkis', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Anthony Daniels', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Benicio del Toro', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Carrie Fisher', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Daisy Ridley', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Domhnall Gleeson', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Gwendoline Christie', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'John Boyega', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Kelly Marie Tran', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Laura Dern', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Lupita Nyong\'o', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Mark Hamill', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Oscar Isaac', 'movie_title' => 'Star Wars: Episode VIII – The Last Jedi'],
            ['actor_name' => 'Adam Driver', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Anthony Daniels', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Billy Dee Williams', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Carrie Fisher', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Daisy Ridley', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Domhnall Gleeson', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Ian McDiarmid', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Joonas Suotamo', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'John Boyega', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Kelly Marie Tran', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Keri Russell', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Lupita Nyong\'o', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Mark Hamill', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Naomi Ackie', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Natalie Portman', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Oscar Isaac', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
            ['actor_name' => 'Richard E. Grant', 'movie_title' => 'Star Wars: Episode IX – The Rise of Skywalker'],
        ];
    
        foreach ($actors_movies as $actor_movie) {
            $actor = Actor::firstOrCreate(['name' => $actor_movie['actor_name']]);
            $movie = Movie::firstOrCreate(['title' => $actor_movie['movie_title']]);

            DB::table('actors_movies')->insert([
                'actor_id' => $actor->id,
                'movie_id' => $movie->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
    }   
}