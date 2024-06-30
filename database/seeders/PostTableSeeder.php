<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for ($i=0; $i < rand(00, 50); $i++) { 
            $user = User::all()->random()->id;
            $categories = Category::inRandomOrder()->limit(rand(1, 9))->get();
            $title = fake()->sentence(rand(5, 15));

            $thumbnails = [
                'https://fastly.picsum.photos/id/64/4326/2884.jpg?hmac=9_SzX666YRpR_fOyYStXpfSiJ_edO3ghlSRnH2w09Kg',
                'https://fastly.picsum.photos/id/65/4912/3264.jpg?hmac=uq0IxYtPIqRKinGruj45KcPPzxDjQvErcxyS1tn7bG0',
                'https://images.pexels.com/photos/2747267/pexels-photo-2747267.jpeg',
                'https://images.unsplash.com/photo-1622782262026-6a327a45014f',
                'https://images.unsplash.com/photo-1623091411395-09e79fdbfcf3',
                'https://images.unsplash.com/photo-1623091410901-00e2d268901f',
                'https://img.freepik.com/free-photo/close-up-portrait-indian-hindu-girl-traditional-violet-saree-posed-street_627829-2107.jpg',
                'https://images.pexels.com/photos/1376042/pexels-photo-1376042.jpeg',
                'https://images.pexels.com/photos/730055/pexels-photo-730055.jpeg',
                'https://images.pexels.com/photos/1484990/pexels-photo-1484990.jpeg',
                'https://images.pexels.com/photos/1686197/pexels-photo-1686197.jpeg',
                'https://images.pexels.com/photos/206585/pexels-photo-206585.jpeg',
                'https://images.pexels.com/photos/2723623/pexels-photo-2723623.jpeg',
                'https://images.pexels.com/photos/1185617/pexels-photo-1185617.jpeg',
                'https://images.pexels.com/photos/1147395/pexels-photo-1147395.jpeg',
                'https://images.pexels.com/photos/3269424/pexels-photo-3269424.jpeg',
                'https://images.pexels.com/photos/2864808/pexels-photo-2864808.jpeg',
            ];
    
            $post = Post::create([
                "user_id"                   => $user,
                "title"                     => $title,
                "slug"                      => Str::slug($title),
                "thumbnail"                 => Arr::random($thumbnails),
                "content"                   => fake()->sentence(rand(20,100)),
                "attachment"                => Arr::random($thumbnails, 5),
                "status"                    => rand(0, 1),
                'created_at'                => now(),
                'updated_at'                => now(),
            ]);

            if ($categories) {
                $post->categories()->attach($categories);
            }
        }

    }
}
