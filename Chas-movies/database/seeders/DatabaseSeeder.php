<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\User::factory()->create([
            'name' => 'admin',
         'email' => 'admin@admin',
         'role' => 0,
         'password' => bcrypt('12345678'),
     ]);

     \App\Models\User::factory()->create([
        'name' => 'user',
     'email' => 'user@user',
     'role' => 1,
     'password' => bcrypt('12345678'),
 ]);


     \App\Models\Film::factory()->create([
        'title' => 'Avatar 2',
       'genre' => 'Fantasy',
        'director' => 'nån',
        'maincast' => 'några',
        'imgurl' => 'https://m.media-amazon.com/images/M/MV5BZDA0OGQxNTItMDZkMC00N2UyLTg3MzMtYTJmNjg3Nzk5MzRiXkEyXkFqcGdeQXVyMjUzOTY1NTc@._V1_.jpg',
    ]);

    \App\Models\Film::factory()->create([
        'title' => 'Memory',
       'genre' => 'Action',
        'director' => 'nån',
        'maincast' => 'Liam Neeson',
        'imgurl' => 'https://m.media-amazon.com/images/M/MV5BOGI5N2FhNzktZjZlNi00MmRjLWE1MmUtNjRlNzQyOGMzYjNhXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_FMjpg_UX1000_.jpg',
    ]);

    \App\Models\Film::factory()->create([
        'title' => 'Smile',
       'genre' => 'Horror',
        'director' => 'nån',
        'maincast' => 'några',
        'imgurl' => 'https://upload.wikimedia.org/wikipedia/en/thumb/7/7f/Smile_%282022_film%29.jpg/220px-Smile_%282022_film%29.jpg',
    ]);

    \App\Models\Film::factory()->create([
        'title' => 'Jaws',
       'genre' => 'Horror',
        'director' => 'nån',
        'maincast' => 'några',
        'imgurl' => 'https://resizing.flixster.com/9ulMcbVWtxvAW4so_JAhh75_cQE=/206x305/v2/https://flxt.tmsimg.com/assets/p8174_p_v8_ai.jpg',
    ]);


    \App\Models\Film::factory()->create([
        'title' => 'Devil wears Prada',
       'genre' => 'Comedy',
        'director' => 'nån',
        'maincast' => 'några',
        'imgurl' => 'https://m.media-amazon.com/images/M/MV5BZjQ3ZTIzOTItMGNjNC00MWRmLWJlMGEtMjJmMDM5ZDIzZGM3XkEyXkFqcGdeQXVyMTkzODUwNzk@._V1_.jpg',
    ]);




    \App\Models\Show::factory()->create([
        'title' => 'Scrubs',
       'genre' => 'Drama',
        'director' => 'nån',
        'maincast' => 'Liam Neeson',
        'seasons' => 11, 
        'episodes' => 234,
        'imgurl' => 'https://m.media-amazon.com/images/M/MV5BOGI5N2FhNzktZjZlNi00MmRjLWE1MmUtNjRlNzQyOGMzYjNhXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_FMjpg_UX1000_.jpg',
    ]);

    \App\Models\Show::factory()->create([
        'title' => 'Something',
       'genre' => 'Action',
        'director' => 'nån',
        'maincast' => 'Liam Neeson',
        'seasons' => 2, 
        'episodes' => 32,
        'imgurl' => 'https://m.media-amazon.com/images/M/MV5BOGI5N2FhNzktZjZlNi00MmRjLWE1MmUtNjRlNzQyOGMzYjNhXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_FMjpg_UX1000_.jpg',
    ]);

    \App\Models\Show::factory()->create([
        'title' => 'Black mirror',
       'genre' => 'Thriller',
        'director' => 'nån',
        'maincast' => 'Liam Neeson',
        'seasons' => 4, 
        'episodes' => 32,
        'imgurl' => 'https://m.media-amazon.com/images/I/91LcizItUqL._SL1500_.jpg',
    ]);


    \App\Models\Show::factory()->create([
        'title' => 'The Last Of Us',
       'genre' => 'Horror',
        'director' => 'nån',
        'maincast' => 'Liam Neeson',
        'seasons' => 1, 
        'episodes' => 5,
        'imgurl' => 'https://m.media-amazon.com/images/M/MV5BZGUzYTI3M2EtZmM0Yy00NGUyLWI4ODEtN2Q3ZGJlYzhhZjU3XkEyXkFqcGdeQXVyNTM0OTY1OQ@@._V1_.jpg',
    ]);

    }
}
