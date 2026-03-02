@extends('layouts.app')

@section('title', 'Experience - Abdul Meneam Riad')

@section('content')
    <div class="container-fluid bg-secondary py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">My Experience</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Experience</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
            <div class="border bg-secondary rounded overflow-hidden">
              <img src="{{ asset('img/1.jpeg') }}" class="img-fluid w-100 rounded" alt="Abdul Meneam Riad" style="object-fit: cover; min-height: 400px;" />
            </div>
          </div>
          <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
            <h4 class="text-secondary sub-title fw-bold">ABOUT ME</h4>
            <h1 class="display-3 mb-4">
              <strong class="text-primary">Abdul Meneam Riad</strong>
            </h1>
            <p class="fs-5 mb-4">
              I am a 12th-grade student based in Seeb, Oman, applying for university admission for the 2026-2027 academic year. My core focus lies at the intersection of Mechatronics, Computer Science, and Artificial Intelligence.
            </p>
            <p class="mb-4">
              Over the last few years, I have actively bridged the gap between software and physical hardware. Whether it is completing web development internships, programming Arduino logic, or exploring new Linux environments like Fedora KDE Plasma, I am driven by the desire to build robust systems. Beyond the workbench and writing code, I am also passionate about creative writing and crafting fictional stories—usually accompanied by a good cup of Yerba Mate.
            </p>
            <a class="btn btn-primary rounded-pill text-white py-3 px-5 mt-2" href="{{ url('/contact') }}">Get in Touch</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-light py-5">
      <div class="container py-5">
        <div class="text-center pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h4 class="text-secondary sub-title fw-bold">My Journey</h4>
            <h1 class="display-2 mb-0">Internships & Clubs</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                @forelse($experiences as $experience)
                    <div class="card border-0 shadow-sm mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-3">
                                <div>
                                    <h3 class="mb-1 text-primary">{{ $experience->role }}</h3>
                                    <h5 class="text-secondary mb-0 fw-bold">{{ $experience->organization }}</h5>
                                </div>
                                <div class="mt-3 mt-md-0">
                                    <span class="bg-light text-dark fw-bold rounded px-3 py-2 border">
                                        <i class="fas fa-calendar-alt text-primary me-2"></i>
                                        {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }} -
                                        {{ $experience->end_date ? \Carbon\Carbon::parse($experience->end_date)->format('M Y') : 'Present' }}
                                    </span>
                                </div>
                            </div>
                            <p class="mb-0 fs-5 mt-3">
                                {!! nl2br(e($experience->description)) !!}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mb-4" style="width: 80px; height: 80px;">
                            <i class="fa fa-briefcase text-primary fs-2"></i>
                        </div>
                        <h4 class="text-muted">No experience entries yet.</h4>
                        <p>Go to your Admin Panel to add your web development internships and WPS club history!</p>
                    </div>
                @endforelse
            </div>
        </div>

      </div>
    </div>
@endsection
