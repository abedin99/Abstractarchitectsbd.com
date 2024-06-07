<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            'Architectural design',
            "Interior design",
            "Structural design",
            "Electrical design",
            "Plumbing design",
        ];

        foreach ($services as $key => $service) {
            Service::insert([
                'title' => $service,
                'slug' => Str::slug($service),
                'content' => null,
                'status' => true,
            ]);
        }
    }
}
