@extends('layouts.app')

@section('title', $project->title . ' - Abdul Meneam Riad')

@section('content')
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(9, 30, 62, .85), rgba(9, 30, 62, .85)),
         url('{{ $project->image_path ? asset('storage/' . $project->image_path) : asset('img/breadcrumb.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5 mt-5">
            <span class="bg-primary text-white rounded-pill px-4 py-2 fw-bold mb-3 d-inline-block animated slideInDown">{{ $project->category }}</span>
            <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $project->title }}</h1>

            <div class="d-flex justify-content-center gap-3 mt-4 animated slideInUp">
                @if($project->demo_url)
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ $project->demo_url }}" target="_blank"><i class="fas fa-play me-2"></i>Live Demo</a>
                @elseif($project->live_url)
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ $project->live_url }}" target="_blank"><i class="fas fa-globe me-2"></i>Live Site</a>
                @endif

                @if($project->github_url)
                    <a class="btn btn-outline-light rounded-pill py-2 px-4" href="{{ $project->github_url }}" target="_blank"><i class="fab fa-github me-2"></i>Source Code</a>
                @endif
            </div>

            <nav aria-label="breadcrumb animated slideInDown" class="mt-4">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/projects') }}" class="text-white">Portfolio</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">{{ Str::limit($project->title, 20) }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white rounded p-4 p-md-5 shadow-sm">

                    @if($project->video_path)
                        <div class="mb-5 rounded overflow-hidden shadow-sm">
                            <video class="w-100" autoplay loop muted playsinline controls>
                                <source src="{{ asset('storage/' . $project->video_path) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif

                    <div class="project-content fs-5" style="line-height: 1.8;">
                        @if($project->content)
                            {!! $project->content !!}
                        @else
                            <p class="text-muted fst-italic">Full case study coming soon...</p>
                            <p>{{ $project->description }}</p>
                        @endif
                    </div>

                    <div class="mt-5 pt-4 border-top">
                        <a href="{{ url('/projects') }}" class="btn btn-outline-primary rounded-pill py-2 px-4">
                            <i class="fa fa-arrow-left me-2"></i>Back to Portfolio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
