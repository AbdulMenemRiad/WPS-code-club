@extends('layouts.app')

@section('title', $post->title . ' - Abdul Meneam Riad')

@section('content')
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(9, 30, 62, .85), rgba(9, 30, 62, .85)),
         url('{{ $post->image_path ? asset('storage/' . $post->image_path) : asset('img/breadcrumb.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5 mt-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $post->title }}</h1>
            <p class="fs-5 text-white mb-0">
                <i class="fa fa-calendar-alt me-2"></i>
                {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('F j, Y') : 'Draft' }}
            </p>
            <nav aria-label="breadcrumb animated slideInDown" class="mt-3">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/blog') }}" class="text-white">Blog</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Article</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white rounded p-5 shadow-sm">
                    <div class="post-content fs-5" style="line-height: 1.8;">
                        {!! $post->content !!}
                    </div>

                    <div class="mt-5 pt-4 border-top">
                        <a href="{{ url('/blog') }}" class="btn btn-outline-primary rounded-pill py-2 px-4">
                            <i class="fa fa-arrow-left me-2"></i>Back to Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
