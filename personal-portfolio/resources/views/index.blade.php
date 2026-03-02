@extends('layouts.app')

@section('title', 'Abdul Meneam Riad | Software & Mechatronics')

@section('content')
    <div class="header-carousel owl-carousel">
      <div class="header-carousel-item">
        <img src="{{ asset('img/counter-bg.jpg') }}" class="img-fluid w-100" alt="Robotics and Engineering" />
        <div class="carousel-caption">
          <div class="carousel-caption-content p-3" style="max-width: 900px">
            <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px">
              Software Developer & Mechatronics
            </h4>
            <h1 class="display-1 text-capitalize text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">
              Building Logic. Engineering Hardware.
            </h1>
            <p class="fs-5 wow fadeInUp" data-wow-delay="0.5s">
              High School Senior (Grade 12) | Seeking University Admission for Fall 2026
            </p>
            <div class="pt-2">
              <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="{{ url('/projects') }}">View My Portfolio</a>
              <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="{{ url('/contact') }}">Contact Me</a>
            </div>
          </div>
        </div>
      </div>

      <div class="header-carousel-item">
        <img src="{{ asset('img/t2.jpg') }}" class="img-fluid w-100" alt="Software Development" />
        <div class="carousel-caption">
          <div class="carousel-caption-content p-3" style="max-width: 900px">
            <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4" style="letter-spacing: 3px">
              Full-Stack & Systems
            </h4>
            <h1 class="display-1 text-capitalize text-white mb-4">
              Turning Ideas into Functional Systems.
            </h1>
            <p class="fs-5">
              From dynamic backend web architectures to physical electronics integrations.
            </p>
            <div class="pt-2">
              <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2" href="{{ url('/projects') }}">View My Portfolio</a>
              <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2" href="{{ url('/about') }}">My Experience</a>
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
              <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Featured projects showcase</h4>
              <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Top Projects</h1>
            </div>
            <div class="col-xl-4 text-xl-end wow fadeInUp" data-wow-delay="0.3s">
              <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ url('/projects') }}">View All Projects</a>
            </div>
          </div>
        </div>

        @if($featuredProjects->count() > 0)
            <div class="training-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">

              @foreach($featuredProjects as $project)
              <div class="training-item bg-white rounded h-100 d-flex flex-column shadow-sm">
                <div class="training-img rounded-top position-relative">
                    @if($project->image_path)
                        <img src="{{ asset('storage/' . $project->image_path) }}" class="img-fluid rounded-top w-100" alt="{{ $project->title }}" style="height: 250px; object-fit: cover;" />
                    @else
                        <img src="{{ asset('img/placeholder.jpg') }}" class="img-fluid rounded-top w-100" alt="Placeholder" style="height: 250px; object-fit: cover;" />
                    @endif
                    <span class="fs-6 fw-bold bg-primary text-white d-inline-block rounded px-3 py-1 position-absolute" style="top: 10px; left: 10px;">{{ $project->category }}</span>
                </div>

                <div class="rounded-bottom border border-top-0 p-4 d-flex flex-column flex-grow-1" style="min-height: 220px;">
                    <h4 class="mb-3 d-block">{{ $project->title }}</h4>
                    <p class="mb-3 flex-grow-1">{{ Str::limit($project->description, 100) }}</p>

                    <div class="mt-auto d-flex justify-content-between align-items-center pt-3">
                        @if($project->demo_url)
                            <a class="btn btn-sm btn-primary rounded-pill text-white py-2 px-3" href="{{ $project->demo_url }}" target="_blank">View Demo</a>
                        @elseif($project->live_url)
                            <a class="btn btn-sm btn-primary rounded-pill text-white py-2 px-3" href="{{ $project->live_url }}" target="_blank">Live Site</a>
                        @endif

                        @if($project->github_url)
                            <a class="text-dark" href="{{ $project->github_url }}" target="_blank"><i class="fab fa-github fs-3"></i></a>
                        @endif
                    </div>
                </div>
              </div>
              @endforeach

            </div>
        @else
            <div class="col-12 text-center py-5">
                <p class="fs-5 text-muted">No featured projects uploaded yet. <br>Go to your Admin Panel and toggle <strong>"Pin to Homepage?"</strong> on your top projects to see them slide here!</p>
            </div>
        @endif

      </div>
    </div>
    @endsection
