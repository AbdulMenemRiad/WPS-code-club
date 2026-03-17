@extends('layouts.app')

@section('title', __('Certifications') . ' - Abdul Meneam Riad')

@section('content')
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(9, 30, 62, .85), rgba(9, 30, 62, .85)),
         url('{{ asset('img/breadcrumb.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5 mt-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">{{ __('Certifications Vault') }}</h1>
            <p class="fs-5 text-white">{{ __('A collection of my academic achievements, courses, and proficiencies.') }}</p>
            <nav aria-label="breadcrumb animated slideInDown" class="mt-3">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">{{ __('Certifications') }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row g-4 justify-content-center">
          @forelse($certificates as $cert)
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card border-0 shadow-sm h-100 training-item">

              <a href="{{ asset('storage/' . $cert->file_path) }}" target="_blank" class="d-block position-relative overflow-hidden bg-light text-center" style="height: 220px;">

                  @if(Str::endsWith(strtolower($cert->file_path), '.pdf'))
                      <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center text-primary" style="background-color: #f8f9fa;">
                          <i class="fas fa-file-pdf fa-5x mb-3"></i>
                          <span class="fw-bold">{{ __('PDF Document') }}</span>
                      </div>
                  @else
                      <img src="{{ asset('storage/' . $cert->file_path) }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="{{ $cert->title }}">
                  @endif

              </a>

              <div class="card-body p-4 d-flex flex-column">
                <h4 class="card-title mb-2">{{ $cert->title }}</h4>
                <h6 class="text-primary mb-3">{{ $cert->issuer }}</h6>

                <div class="text-muted mb-4">
                    <i class="fas fa-calendar-alt me-2"></i>
                    {{ $cert->date_earned ? \Carbon\Carbon::parse($cert->date_earned)->format('F Y') : '' }}
                </div>

                <div class="mt-auto d-flex gap-2">
                    <a href="{{ asset('storage/' . $cert->file_path) }}" target="_blank" class="btn btn-outline-primary rounded-pill flex-fill">
                        <i class="fas fa-eye me-2"></i>{{ __('View') }}
                    </a>

                    <a href="{{ asset('storage/' . $cert->file_path) }}" download="{{ Str::slug($cert->title) . '.' . pathinfo($cert->file_path, PATHINFO_EXTENSION) }}" class="btn btn-primary rounded-pill flex-fill text-white">
                        <i class="fas fa-download me-2"></i>{{ __('Download') }}
                    </a>
                </div>
              </div>
            </div>
          </div>
          @empty
          <div class="col-12 text-center py-5">
              <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mb-4" style="width: 80px; height: 80px;">
                  <i class="fas fa-certificate text-primary fs-2"></i>
              </div>
              <h4 class="text-muted">{{ __('No certificates uploaded yet.') }}</h4>
          </div>
          @endforelse
        </div>
      </div>
    </div>
@endsection
