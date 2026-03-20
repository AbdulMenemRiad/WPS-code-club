@extends('layouts.app')

@section('title', 'Abdul Meneam Riad | ' . __('Software Developer & Mechatronics'))

@section('content')
    <div class="header-carousel owl-carousel">

        <div class="header-carousel-item">
            <img src="{{ asset('img/counter-bg.jpg') }}" class="img-fluid w-100" alt="Robotics and Engineering" />
            <div class="carousel-caption d-flex align-items-center justify-content-center"
                style="top: 0; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.4);">
                <div class="carousel-caption-content p-3 text-center w-100 mx-auto" style="max-width: 900px;">
                    <h4 class="text-white text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s"
                        style="letter-spacing: 3px">
                        {{ __('Software Developer & Mechatronics') }}
                    </h4>
                    <h1 class="display-1 text-capitalize text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        {{ __('Building Logic. Engineering Hardware.') }}
                    </h1>
                    <p class="fs-5 text-white wow fadeInUp" data-wow-delay="0.5s">
                        {{ __('High School Senior (Grade 12) | Seeking University Admission for Fall 2026') }}
                    </p>
                    <div class="pt-2">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft"
                            data-wow-delay="0.1s" href="{{ url('/projects') }}">{{ __('View My Portfolio') }}</a>
                        <a class="btn btn-outline-light rounded-pill py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s"
                            href="{{ url('/contact') }}">{{ __('Contact Me') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-carousel-item">
            <img src="{{ asset('img/t2.jpg') }}" class="img-fluid w-100" alt="Software Development" />
            <div class="carousel-caption d-flex align-items-center justify-content-center"
                style="top: 0; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.4);">
                <div class="carousel-caption-content p-3 text-center w-100 mx-auto" style="max-width: 900px;">
                    <h4 class="text-white text-uppercase sub-title fw-bold mb-4" style="letter-spacing: 3px">
                        {{ __('Full-Stack & Systems') }}
                    </h4>
                    <h1 class="display-1 text-capitalize text-white mb-4">
                        {{ __('Turning Ideas into Functional Systems.') }}
                    </h1>
                    <p class="fs-5 text-white">
                        {{ __('From dynamic backend web architectures to physical electronics integrations.') }}
                    </p>
                    <div class="pt-2">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2"
                            href="{{ url('/projects') }}">{{ __('View My Portfolio') }}</a>
                        <a class="btn btn-outline-light rounded-pill py-3 px-5 m-2"
                            href="{{ url('/about') }}">{{ __('My Experience') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid bg-secondary wow zoomInDown" data-wow-delay="0.1s">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center p-5">
                <h1 class="me-4 text-white">
                    <span class="fw-normal">{{ __('Bridging the gap between software and hardware.') }}</span>
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="border bg-secondary rounded shadow-sm overflow-hidden position-relative">
                        <img src="{{ asset('img/me3.png') }}" class="img-fluid w-100 rounded" alt="Abdul Meneam Riad"
                            style="min-height: 450px; object-fit: cover;" />
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">{{ __('HELLO, I\'M ABDUL') }}</h4>
                    <h1 class="display-3 mb-4">
                        <strong class="text-primary">{{ __('Creator &') }} </strong>{{ __('Problem Solver') }}
                    </h1>
                    <p class="fs-5 mb-4">
                        {{ __('I am a web developer and mechatronics enthusiast driven by a passion for building robust systems. Whether I am writing Laravel backends for clients, configuring servers on Fedora Linux, or wiring up Arduino circuits, I love tackling complex technical challenges.') }}
                    </p>
                    <p class="mb-4 text-muted">
                        {{ __('My portfolio spans from high-level software development to low-level hardware integration. Check out my featured projects below to see my code and circuitry in action.') }}
                    </p>
                    <div class="d-flex gap-3">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5"
                            href="{{ url('/about') }}">{{ __('Read Full Story') }}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid counter-facts py-5 mb-5"
        style="background: linear-gradient(rgba(9, 30, 62, .85), rgba(9, 30, 62, .85)), url('{{ asset('img/breadcrumb.jpg') }}') center center no-repeat; background-attachment: fixed; background-size: cover;">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="counter-icon bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-laptop-code fs-2 floating-icon"></i>
                    </div>
                    <h1 class="text-white mb-0"><span data-toggle="counter-up">12</span>+</h1>
                    <p class="text-white-50 fs-5">{{ __('Client Websites') }}</p>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter-icon bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-microchip fs-2 floating-icon"></i>
                    </div>
                    <h1 class="text-white mb-0"><span data-toggle="counter-up">25</span>+</h1>
                    <p class="text-white-50 fs-5">{{ __('Hardware Builds') }}</p>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="counter-icon bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-award fs-2 floating-icon"></i>
                    </div>
                    <h1 class="text-white mb-0"><span data-toggle="counter-up">5</span></h1>
                    <p class="text-white-50 fs-5">{{ __('Certifications') }}</p>
                </div>
                <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="counter-icon bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                        style="width: 80px; height: 80px;">
                        <i class="fas fa-mug-hot fs-2 floating-icon"></i>
                    </div>
                    <h1 class="text-white mb-0"><span data-toggle="counter-up">340</span>+</h1>
                    <p class="text-white-50 fs-5">{{ __('Cups of Yerba Mate') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <h4 class="text-secondary sub-title fw-bold">{{ __('SEE IT IN ACTION') }}</h4>
                    <h1 class="display-4 mb-4">{{ __('Mechatronics & Robotics Showcase') }}</h1>
                    <p class="mb-4 fs-5">
                        {{ __('Words and code snippets only tell half the story. Watch my recent artificial intelligence and hardware integrations in real-time.') }}
                    </p>
                    <ul class="list-unstyled mb-4 fs-5">
                        <li class="mb-2"><i
                                class="fas fa-check-circle text-primary me-3"></i>{{ __('Computer Vision tracking') }}
                        </li>
                        <li class="mb-2"><i
                                class="fas fa-check-circle text-primary me-3"></i>{{ __('Real-time robotic actuations') }}
                        </li>
                        <li class="mb-2"><i
                                class="fas fa-check-circle text-primary me-3"></i>{{ __('Custom Arduino logic') }}</li>
                    </ul>
                    <a href="{{ url('/projects') }}"
                        class="btn btn-primary rounded-pill py-3 px-5">{{ __('Explore All Hardware') }}</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="position-relative rounded overflow-hidden shadow-lg border border-5 border-white">
                        <video class="w-100" autoplay loop muted playsinline style="border-radius: 8px;">
                            <source src="{{ asset('video/demo.mp4') }}" type="video/mp4">
                        </video>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="fas fa-play-circle fa-4x text-white opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid training py-5">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-8">
                        <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">
                            {{ __('Featured projects showcase') }}</h4>
                        <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">{{ __('Top Projects') }}</h1>
                    </div>
                    <div class="col-xl-4 text-xl-end wow fadeInUp" data-wow-delay="0.3s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5"
                            href="{{ url('/projects') }}">{{ __('View All Projects') }}</a>
                    </div>
                </div>
            </div>

            @if ($featuredProjects->count() > 0)
                <div class="training-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($featuredProjects as $project)
                        <div class="training-item bg-white rounded h-100 d-flex flex-column shadow-sm">
                            <a href="{{ url('/projects/' . $project->slug) }}"
                                class="training-img rounded-top position-relative d-block">
                                @if ($project->image_path)
                                    <img src="{{ asset('storage/' . $project->image_path) }}"
                                        class="img-fluid rounded-top w-100" alt="{{ $project->title }}"
                                        style="height: 250px; object-fit: cover;" />
                                @else
                                    <img src="{{ asset('img/placeholder.jpg') }}" class="img-fluid rounded-top w-100"
                                        alt="Placeholder" style="height: 250px; object-fit: cover;" />
                                @endif
                                <span
                                    class="fs-6 fw-bold bg-primary text-white d-inline-block rounded px-3 py-1 position-absolute"
                                    style="top: 10px; left: 10px;">{{ $project->category }}</span>
                            </a>

                            <div class="rounded-bottom border border-top-0 p-4 d-flex flex-column flex-grow-1"
                                style="min-height: 220px;">
                                <a href="{{ url('/projects/' . $project->slug) }}"
                                    class="h4 mb-3 d-block text-dark text-decoration-none">{{ $project->title }}</a>
                                <p class="mb-3 flex-grow-1">{{ Str::limit($project->description, 100) }}</p>

                                <div class="mt-auto d-flex justify-content-between align-items-center pt-3">
                                    @if ($project->demo_url)
                                        <a class="btn btn-sm btn-primary rounded-pill text-white py-2 px-3"
                                            href="{{ $project->demo_url }}" target="_blank">{{ __('View Demo') }}</a>
                                    @elseif($project->live_url)
                                        <a class="btn btn-sm btn-primary rounded-pill text-white py-2 px-3"
                                            href="{{ $project->live_url }}" target="_blank">{{ __('Live Site') }}</a>
                                    @endif

                                    @if ($project->github_url)
                                        <a class="text-dark" href="{{ $project->github_url }}" target="_blank"><i
                                                class="fab fa-github fs-3"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>

    <div class="container-fluid blog py-5 bg-light">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-8">
                        <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">
                            {{ __('Latest Articles') }}</h4>
                        <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">{{ __('Featured Tech Blogs') }}
                        </h1>
                    </div>
                    <div class="col-xl-4 text-xl-end wow fadeInUp" data-wow-delay="0.3s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5"
                            href="{{ url('/blog') }}">{{ __('View All Blogs') }}</a>
                    </div>
                </div>
            </div>

            @if (isset($featuredPosts) && $featuredPosts->count() > 0)
                <div class="blog-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($featuredPosts as $post)
                        <div class="blog-item bg-white rounded h-100 d-flex flex-column shadow-sm training-item">
                            <a href="{{ url('/blog/' . $post->slug) }}"
                                class="blog-img rounded-top d-block position-relative">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/' . $post->image_path) }}"
                                        class="img-fluid rounded-top w-100" alt="{{ $post->title }}"
                                        style="height: 250px; object-fit: cover;" />
                                @else
                                    <img src="{{ asset('img/class-4.jpg') }}" class="img-fluid rounded-top w-100"
                                        alt="Placeholder" style="height: 250px; object-fit: cover;" />
                                @endif
                                <span
                                    class="fs-6 fw-bold bg-secondary text-white d-inline-block rounded px-3 py-1 position-absolute"
                                    style="top: 10px; right: 10px;">
                                    <i class="fa fa-calendar-alt me-1"></i>
                                    {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('M d') : 'Draft' }}
                                </span>
                            </a>

                            <div class="p-4 flex-grow-1 d-flex flex-column">
                                <a href="{{ url('/blog/' . $post->slug) }}"
                                    class="h4 mb-3 d-block text-dark text-decoration-none">{{ $post->title }}</a>
                                <p class="mb-4 flex-grow-1 text-muted">
                                    {{ Str::limit(strip_tags($post->content), 100) }}
                                </p>

                                <a class="btn btn-outline-primary rounded-pill py-2 px-4 mt-auto align-self-start"
                                    href="{{ url('/blog/' . $post->slug) }}">{{ __('Read Article') }} <i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="col-12 text-center py-5">
                    <p class="fs-5 text-muted">{{ __('No featured blogs yet. Pin them from the Admin Panel!') }}</p>
                </div>
            @endif
        </div>
    </div>
@endsection
