@extends('layouts.app')

@section('title', 'Certifications - Abdul Meneam Riad')

@section('content')
    <div class="container-fluid bg-secondary py-5 mb-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Certifications Vault</h1>
            <p class="fs-5 text-white">A collection of my academic achievements, courses, and proficiencies.</p>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            @forelse($certificates as $cert)
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card h-100 border-0 shadow-sm">
                    <a href="{{ asset('storage/' . $cert->file_path) }}" data-lightbox="certs" data-title="{{ $cert->title }}">
                        <img src="{{ asset('storage/' . $cert->file_path) }}" class="card-img-top" alt="{{ $cert->title }}" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold mb-1">{{ $cert->title }}</h6>
                        <small class="text-muted">{{ $cert->issuer }}</small><br>
                        <small class="text-primary">{{ \Carbon\Carbon::parse($cert->date_earned)->format('M Y') }}</small>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">No certificates uploaded yet.</p>
            </div>
            @endforelse
        </div>
    </div>
@endsection
