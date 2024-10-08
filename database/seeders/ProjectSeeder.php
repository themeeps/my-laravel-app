<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'title' => 'Portfolio Website',
            'description' => 'Website untuk menampilkan portfolio menggunakan Laravel.',
            'link' => 'https://github.com/username/portfolio-website'
        ]);

        Project::create([
            'title' => 'E-Commerce App',
            'description' => 'Aplikasi e-commerce dengan Laravel dan Vue.js.',
            'link' => 'https://github.com/username/e-commerce-app'
        ]);
    }
}
