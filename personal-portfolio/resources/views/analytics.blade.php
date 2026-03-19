@extends('layouts.app')

@section('title', __('Live Analytics') . ' - Abdul Meneam Riad')

@section('content')
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(9, 30, 62, .85), rgba(9, 30, 62, .85)),
         url('{{ asset('img/breadcrumb.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5 mt-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">{{ __('Live Analytics') }}</h1>
            <p class="fs-5 text-white">{{ __('Real-time, privacy-respecting traffic data self-hosted on my personal VPS.') }}</p>
            <nav aria-label="breadcrumb animated slideInDown" class="mt-3">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">{{ __('Analytics') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white rounded overflow-hidden shadow-lg border border-5 border-white" style="height: 1000px;">
                        <iframe
                            src="https://analytics.abdulmenem.com/share/6JR5iVW27xYLfovd"
                            frameborder="0"
                            width="100%"
                            height="100%"
                            style="min-height: 1000px;">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
