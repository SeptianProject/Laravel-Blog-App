<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Category::create([
            'slug' => 'mobile-dev',
            'name' => 'Mobile Dev',
            'color' => 'blue'
        ]);
        Category::create([
            'slug' => 'mobile-design',
            'name' => 'Mobile Design',
            'color' => 'green'
        ]);
        Category::create([
            'slug' => 'web-dev',
            'name' => 'Web Dev',
            'color' => 'red'
        ]);
        Category::create([
            'slug' => 'web-design',
            'name' => 'Web Design',
            'color' => 'yellow'
        ]);
    }
}