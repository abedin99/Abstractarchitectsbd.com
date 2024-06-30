<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "Design Trends: Covering the latest trends in architecture and design.",
            "Sustainable Architecture: Focusing on eco-friendly and sustainable building practices.",
            "Architectural Styles: Exploring various architectural styles from different periods and regions.",
            "Innovative Materials: Discussing new and innovative materials being used in construction.",
            "Famous Architects: Profiles and works of renowned architects.",
            "Urban Planning: Insights and developments in urban planning and city design.",
            "Residential Architecture: Design ideas and trends for homes and apartments.",
            "Commercial Architecture: Office buildings, shopping centers, and other commercial structures.",
            "Historic Buildings: Exploring and preserving historic and heritage buildings.",
            "Interior Design: Ideas and trends for interior spaces.",
            "Landscape Architecture: Design and planning of outdoor spaces.",
            "Architectural Technology: Innovations in technology affecting architecture.",
            "Case Studies: In-depth analysis of specific architectural projects.",
            "Interviews: Conversations with architects, designers, and industry experts.",
            "DIY Projects: Small-scale architectural and design projects for enthusiasts.",
            "Architecture in Media: How architecture is portrayed in movies, TV shows, and books.",
            "Events and Exhibitions: Coverage of architectural events, exhibitions, and conferences.",
            "Architectural Photography: Techniques and showcases of architectural photography.",
            "Educational Resources: Tutorials, courses, and resources for learning architecture.",
            "Opinion and Commentary: Personal opinions and commentary on architectural issues and trends.",
        ];

        foreach ($categories as $key => $category) {
            $exp = explode(': ', $category);
            $title = $exp[0];
            $desc = $exp[1];

            Category::insert([
                'title' => $title,
                'slug' => Str::slug($title. '-'. Str::random(5)),
                'description' => $desc,
                'status' => true,
                'meta_title' => $title,
                'meta_description' => $desc,
                'meta_keyword' => null,
            ]);
        }
    }
}
