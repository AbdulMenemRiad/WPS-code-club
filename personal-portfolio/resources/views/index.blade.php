@extends('layouts.app')

@section('title', 'Abdul Meneam Riad | Software & Mechatronics')

@section('content')
    <div class="container-fluid bg-secondary py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-5">
            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">
              Software Developer & Mechatronics Engineer
            </h4>
            <h1 class="display-2 text-white mb-4 animated slideInDown">
              Building Logic. Engineering Hardware.
            </h1>
            <p class="fs-5 text-white mb-5 wow fadeInUp" data-wow-delay="0.5s">
              High School Senior (Grade 12) | Seeking University Admission for Fall 2026
            </p>
            <div class="pt-2">
              <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" href="{{ url('/projects') }}">View My Portfolio</a>
              <a class="btn btn-outline-light rounded-pill py-3 px-5 m-2 wow fadeInRight" href="{{ url('/contact') }}">Contact Me</a>
            </div>
        </div>
    </div>
    <div class="container-fluid training py-5">
      <div class="container py-5">
        <div class="pb-5 text-center">
          <h4 class="text-secondary sub-title fw-bold">Featured Work</h4>
          <h1 class="display-2 mb-0">Top Projects</h1>
        </div>
        <div class="row g-4">
          @forelse($featuredProjects as $project)
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column shadow-sm">
              <div class="training-img rounded-top">
                @if($project->image_path)
                    <img src="{{ asset('storage/' . $project->image_path) }}" class="img-fluid rounded-top w-100" alt="{{ $project->title }}" style="height: 250px; object-fit: cover;" />
                @else
                    <img src="{{ asset('img/placeholder.jpg') }}" class="img-fluid rounded-top w-100" alt="Placeholder" style="height: 250px; object-fit: cover;" />
                @endif
                <span class="bg-primary text-white d-inline-block rounded px-3 py-1 position-absolute" style="top: 10px; left: 10px;">{{ $project->category }}</span>
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <h4 class="mb-3 d-block">{{ $project->title }}</h4>
                <p class="mb-3 flex-grow-1">{{ Str::limit($project->description, 100) }}</p>

                <div class="mt-auto d-flex justify-content-between align-items-center">
                    @if($project->demo_url)
                        <a class="btn btn-sm btn-primary rounded-pill text-white py-2 px-3" href="{{ $project->demo_url }}" target="_blank">View Demo</a>
                    @elseif($project->live_url)
                        <a class="btn btn-sm btn-primary rounded-pill text-white py-2 px-3" href="{{ $project->live_url }}" target="_blank">Live Site</a>
                    @endif

                    @if($project->github_url)
                        <a class="text-dark" href="{{ $project->github_url }}" target="_blank"><i class="fab fa-github fs-4"></i></a>
                    @endif
                </div>
              </div>
            </div>
          </div>
          @empty
            <div class="col-12 text-center">
                <p>No featured projects uploaded yet. They will appear here once added from the admin panel.</p>
            </div>
          @endforelse
        </div>
      </div>
    </div>
    @endsection
