<x-app-layout>
    
    <!-- Meta Title -->
    <x-slot name="meta_title">
        {{ config('app.name') }}
    </x-slot>

    <x-slot name="meta_info">
        <meta name="description" content="">
        <meta name="keyword" content="">
    </x-slot>

    <x-slot name="css">

    </x-slot>

    <x-slot name="js">

    </x-slot>

    <!--$ slider-area start -->
    <div class="slider-area">
        <div class="slider-full-active owl-carousel custom-dots">
            <div class="slide-full slider-height d-flex align-items-center"
                style="background-image: url({{ asset('/assets') }}/img/hero/h1_hero.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
                            <div class="slide-full-content">
                                <span>#1 aritecture in united stare</span>
                                <h1>Focus on<br> Design Quality</h1>
                                <p>We creating lasting impression through architecture design.</p>
                                <a class="btn" href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-full d-flex slider-height align-items-center"
                style="background-image: url({{ asset('/assets') }}/img/hero/h1_hero2.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
                            <div class="slide-full-content">
                                <span>#1 aritecture in united stare</span>
                                <h1>Focus on<br> Design Quality</h1>
                                <p>We creating lasting impression through architecture design.</p>
                                <a class="btn" href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-full d-flex slider-height align-items-center"
                style="background-image: url({{ asset('/assets/img/hero/h1_hero.png') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
                            <div class="slide-full-content">
                                <span>#1 aritecture in united stare</span>
                                <h1>Focus on<br> Design Quality</h1>
                                <p>We creating lasting impression through architecture design.</p>
                                <a class="btn" href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area end -->

    <!--$ About Start-->
    <section class="about-area section-padding2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-35">
                            <span>About Us</span>
                            <h2>52 Years Of Experience in this area</h2>
                        </div>
                        <p>Brook presents your services with flexible, convenient and cdpoe layouts. You can select your
                            favorite layouts & elements for cular ts with unlimited ustomization possibilities.
                            Pixel-perfreplication of the designers is intended.</p>
                        <a href="{{ route('about') }}" class="btn">About us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img ">
                            <img src="{{ asset('/assets') }}/img/gallery/about1.png" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="{{ asset('/assets') }}/img/gallery/about2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About  End-->

    <!--$ Services Area Start -->
    <section class="service-area pt-150 pb-150">
        <div class="service-bg"></div>
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11">
                    <div class="section-tittle section-tittle3  text-center mb-90">
                        <span>Our Services</span>
                        <h2>We provide best intorior solution for you</h2>
                    </div>
                </div>
            </div>
            <!-- Section caption -->
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <i class="flaticon-null"></i>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Architecture</a></h4>
                            <p>Sorem spsum dolor sit amsectetr adipisclit, seddo eiusmod tempr incididunt laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9">
                    <div class="services-caption active text-center mb-30">
                        <div class="service-icon">
                            <i class="flaticon-null-1"></i>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Interior Design</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-9">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <i class="flaticon-null-2"></i>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Urban Design</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End -->

    <!--$ Popular Work Start -->
    <section class="popular-work-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our recent work</span>
                        <h2>Our best recent popular work here</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-col-lg-6 col-md-6 col-sm-6">
                    <div class="single-cat mb-110">
                        <img src="{{ asset('/assets') }}/img/gallery/popular1.png" alt="">
                        <div class="img-cap">
                            <h4>Downside Low House</h4>
                            <p>Melbourn, Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-col-lg-6 col-md-6 col-sm-6">
                    <div class="single-cat mb-110">
                        <img src="{{ asset('/assets') }}/img/gallery/popular2.png" alt="">
                        <div class="img-cap">
                            <h4>Top Commercial Building</h4>
                            <p>Melbourn, Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-col-lg-6 col-md-6 col-sm-6">
                    <div class="single-cat mb-110">
                        <img src="{{ asset('/assets') }}/img/gallery/popular3.png" alt="">
                        <div class="img-cap">
                            <h4>Big Building Concept</h4>
                            <p>Melbourn, Australia</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-col-lg-6 col-md-6 col-sm-6">
                    <div class="single-cat mb-110">
                        <img src="{{ asset('/assets') }}/img/gallery/popular4.png" alt="">
                        <div class="img-cap">
                            <h4>Downside Low House</h4>
                            <p>Melbourn, Australia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Work End -->

    <!--$ Experience Area Start -->
    <section class="experience-area position-relative d-flex align-items-end">
        <div class="caption-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="experience-caption">
                        <h2>Our best recent popular work here</h2>
                        <p>Brook presents your services with flexible, convenient and cdpoe layouts. You can select your
                            favorite layouts & elements for cular ts with unlimited ustomization possibilit.</p>
                        <a href="{{ route('about') }}" class="btn">About us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience Area End -->

    <!--$ Team Start -->
    <section class="team-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our exparts</span>
                        <h2>best team we have ever had right now</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{ asset('/assets') }}/img/gallery/team2.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Jhon Sunsa</a></h3>
                            <span>Creative derector</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{ asset('/assets') }}/img/gallery/team3.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Smith J White</a></h3>
                            <span>Creative derector</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{ asset('/assets') }}/img/gallery/team1.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Jayson Brouni</a></h3>
                            <span>Creative derector</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->

    <!--$ All startups Start -->
    <div class="starups-area testimonial-area fix">
        <!--left Contents  -->
        <div class="starups-img">
            <div class="play-btn"><a class="popup-video" href="https://www.youtube.com/watch?v=ssBM8JaPMiw"><i
                        class="flaticon-null-3"></i></a></div>
        </div>
        <!-- Right Contents -->
        <div class="starups">
            <!--$ Testimonial Start -->
            <div class="h1-testimonial-active">
                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                    <div class="testimonial-caption ">
                        <!-- founder -->
                        <div class="testimonial-founder d-flex align-items-center justify-content-center mb-40">
                            <div class="founder-img">
                                <img src="{{ asset('/assets') }}/img/gallery/testimonial.png" alt="">
                            </div>
                            <div class="founder-text">
                                <span>OliQa .F jems</span>
                                <p>Designer</p>
                            </div>
                        </div>
                        <!-- Caption -->
                        <div class="testimonial-top-cap">
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Qcuis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                                accumsa.</p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
        </div>
    </div>
    <!--All startups End -->

    <!--$ Blog Area Start -->
    <section class="home-blog-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                    <div class="section-tittle text-center mb-90">
                        <span>Recent blog</span>
                        <h2>All recent articals from us.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('/assets') }}/img/gallery/home-blog1.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>| Physics</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a>
                                </h3>
                                <a href="blog_details.html" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset('/assets') }}/img/gallery/home-blog2.png" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>| Physics</p>
                                <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a>
                                </h3>
                                <a href="blog_details.html" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</x-app-layout>
