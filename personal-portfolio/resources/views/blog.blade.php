@extends('layouts.app')

@section('title', 'Blog - Abdul Meneam Riad')

@section('content')
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(9, 30, 62, .85), rgba(9, 30, 62, .85)), url('{{ asset('img/counter-bg.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5 mt-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">My Blog</h1>
            <p class="fs-5 text-white mb-0">Thoughts, tutorials, and updates on my latest tech projects.</p>
            <nav aria-label="breadcrumb animated slideInDown" class="mt-3">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid blog py-5">
      <div class="container py-5">
        <div class="text-center pb-5 wow fadeInUp" data-wow-delay="0.1s">
          <h4 class="text-secondary sub-title fw-bold">Articles & Tutorials</h4>
          <h1 class="display-2 mb-0">Latest Updates</h1>
        </div>

        <div class="row g-4">
          @forelse($posts as $post)
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="blog-item bg-white rounded h-100 d-flex flex-column shadow-sm">
              <div class="blog-img rounded-top">
                @if($post->image_path)
                    <img src="{{ asset('storage/' . $post->image_path) }}" class="img-fluid rounded-top w-100" alt="{{ $post->title }}" style="height: 250px; object-fit: cover;"/>
                @else
                    <img src="{{ asset('img/class-4.jpg') }}" class="img-fluid rounded-top w-100" alt="Placeholder" style="height: 250px; object-fit: cover;"/>
                @endif
              </div>
              <div class="bg-light rounded-bottom p-4 flex-grow-1 d-flex flex-column">
                <div class="d-flex justify-content-between mb-4">
                  <span class="text-muted">
                      <i class="fa fa-calendar-alt text-primary"></i>
                      {{ $post->published_at ? \Carbon\Carbon::parse($post->published_at)->format('d M Y') : 'Draft' }}
                  </span>
                  <span class="text-muted"><span class="fa fa-folder text-primary"></span> Tech</span>
                </div>

                <a href="{{ url('/blog/' . $post->slug) }}" class="h4 mb-3 d-block">{{ $post->title }}</a>

                <p class="mb-3 flex-grow-1">
                  {{ Str::limit(strip_tags($post->content), 120) }}
                </p>

                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/blog/' . $post->slug) }}">Read More</a>
              </div>
            </div>
          </div>
          @empty
          <div class="col-12 text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mb-4" style="width: 80px; height: 80px;">
                <i class="fa fa-newspaper text-primary fs-2"></i>
            </div>
            <h4 class="text-muted">No blog posts yet.</h4>
            <p>Head over to the admin panel to publish your first tutorial or project update!</p>
          </div>
          @endforelse
        </div>
      </div>
    </div>
    @endsection
