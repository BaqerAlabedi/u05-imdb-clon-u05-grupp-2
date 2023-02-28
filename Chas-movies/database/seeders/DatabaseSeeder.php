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
         'password' => bcrypt('12345678'),
     ]);

     \App\Models\User::factory()->create([
        'name' => 'user',
     'email' => 'user@user',
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
        'imgurl' => 'https://resizing.flixster.com/9ulMcbVWtxvAW4so_JAhh75_cQE=/206x305/v2/https://flxt.tmsimg.com/assets/p8174_p_v8_ai.jpg',
    ]);

    \App\Models\Film::factory()->create([
        'title' => 'Jaws',
       'genre' => 'Horror',
        'director' => 'nån',
        'maincast' => 'några',
        'imgurl' => 'https://resizing.flixster.com/9ulMcbVWtxvAW4so_JAhh75_cQE=/206x305/v2/https://flxt.tmsimg.com/assets/p8174_p_v8_ai.jpg',
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
        'imgurl' => 'https://flxt.tmsimg.com/assets/p8952681_b_v13_ab.jpg',
    ]);

    }
}
