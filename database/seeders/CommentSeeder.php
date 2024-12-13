<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create('en_US');
        foreach(range(1, 50) as $index){
            Comment::create([
                'name'=>$faker->name,
                'comment'=> $faker->sentence(rand(10, 30)),
                'blog_number'=> ($index % 3 + 1),
            ]
            );
        }
    }
}
