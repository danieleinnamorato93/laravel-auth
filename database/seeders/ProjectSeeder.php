<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
   
        for ($i = 0; $i < 40; $i++) { 
            $newProject = new Project();
            $newProject->title = $faker->realTextBetween(5, 30);
            $newProject->content = $faker->realTextBetween(350, 800);
            $newProject->save(); 
        }
    }
}
