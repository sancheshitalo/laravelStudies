<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'user', 'visitor'];
        $posts = [];

        $user_id = 1;
        foreach($roles as $role){
            $posts[] = [
                'user_id' => $user_id++,
                'title' => "Post do user $role",
                'content' => "Conteúdo do post do user $role",
                'created_at' => now(-3),
                'updated_at' => now(-3)
            ];
        }
        DB::table('posts')->insert($posts);
    }
}
