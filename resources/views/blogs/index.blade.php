<x-app-layout>
    
    <!-- Meta Title -->
    <x-slot name="meta_title">
        Blog | {{ config('app.name') }}
    </x-slot>

    <x-slot name="meta_info">
        <meta name="description" content="">
        <meta name="keyword" content="">
    </x-slot>

    <x-slot name="css">

    </x-slot>

    <x-slot name="js">

    </x-slot>
        <!--$ Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--$ Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach ($posts as $post)
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        @if (Storage::disk('public')->has($post->thumbnail))
                                            <img class="card-img rounded-0" src="{{ Storage::disk('public')->url($post->thumbnail); }}" alt="{{ $post->thumbnail }}">
                                        @else
                                            <img class="card-img rounded-0" src="{{ asset('assets/img/no-image.jpg') }}" alt="{{ $post->title }}">
                                        @endif
                                        <a href="#" class="blog_item_date">
                                            <h3>{{ $post->created_at->format('d') }}</h3>
                                            <p>{{ $post->created_at->format('F') }}</p>
                                        </a>
                                    </div>
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="{{ route('blog.show', $post->slug) }}">
                                            <h2 class="blog-head" style="color: #2d2d2d;">{{ $post->title }}</h2>
                                        </a>
                                        <p>{!! Str::words($post->content, 30) !!}...</p>
                                        <ul class="blog-info-link">
                                            <li><i class="fa fa-user"></i> <a href="#">{{ $post->user->name }}</a></li>
                                            <li>
                                                <i class="fa fa-tags"></i> 
                                                @foreach ($post->categories as $category)
                                                    <a href="#">{{ $category->title }}</a>, 
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            @endforeach

                            <nav class="blog-pagination justify-content-center d-flex">
		    	                {!! $posts->appends(request()->all())->links() !!}
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        @include('blogs.partial.sidebar')
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
</x-app-layout>
