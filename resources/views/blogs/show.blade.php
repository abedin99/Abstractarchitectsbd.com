<x-app-layout>

    <!-- Meta Title -->
    <x-slot name="meta_title">
        {{ $post->title }}
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
                            <h2>{{ $post->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!--$ Blog Area Start -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            @if (Storage::disk('public')->has($post->thumbnail))
                                <img class="img-fluid w-100" src="{{ Storage::disk('public')->url($post->thumbnail); }}" alt="{{ $post->thumbnail }}">
                            @else
                                <img class="img-fluid w-100" src="{{ asset('assets/img/no-image.jpg') }}" alt="{{ $post->title }}">
                            @endif
                        </div>
                        <div class="blog_details">
                            <h2 style="color: #2d2d2d;">{{ $post->title }}</h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><i class="fa fa-user"></i> <a href="#">{{ $post->user->name }}</a></li>
                                <li>
                                    <i class="fa fa-tags"></i> 
                                    @foreach ($post->categories as $category)
                                        <a href="#">{{ $category->title }}</a>, 
                                    @endforeach
                                </li>
                            </ul>
                            {!! $post->content !!}
                        </div>
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
