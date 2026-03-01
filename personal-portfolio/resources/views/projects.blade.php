@extends('layouts.app')

@section('title', 'Portfolio - Abdul Meneam Riad')

@section('content')
    <div class="container-fluid bg-secondary py-5 mb-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">My Portfolio</h1>
            <p class="fs-5 text-white">Client websites, backend architectures, and physical mechatronics builds.</p>
        </div>
    </div>

    <div class="container-fluid training py-5">
      <div class="container py-5">
        <div class="row g-4">
          @foreach($projects as $project)
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column shadow-sm">
              <div class="training-img rounded-top position-relative">
                @if($project->image_path)
                    <img src="{{ asset('storage/' . $project->image_path) }}" class="img-fluid rounded-top w-100" style="height: 250px; object-fit: cover;" />
                @else
                    <img src="{{ asset('img/placeholder.jpg') }}" class="img-fluid rounded-top w-100" style="height: 250px; object-fit: cover;" />
                @endif

                @if($project->video_path)
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <i class="fas fa-play-circle fa-3x text-white opacity-75"></i>
                    </div>
                @endif
                <span class="bg-primary text-white rounded px-3 py-1 position-absolute" style="top: 10px; right: 10px;">{{ $project->category }}</span>
              </div>

              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <h4 class="mb-3">{{ $project->title }}</h4>
                <p class="mb-3 flex-grow-1">{{ $project->description }}</p>

                <div class="d-flex gap-2 mt-auto">
                    @if($project->demo_url)
                        <a class="btn btn-outline-primary rounded-pill btn-sm" href="{{ $project->demo_url }}" target="_blank">Live Demo</a>
                    @endif
                    @if($project->github_url)
                        <a class="btn btn-dark rounded-pill btn-sm" href="{{ $project->github_url }}" target="_blank"><i class="fab fa-github me-1"></i> Code</a>
                    @endif
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
@endsection
