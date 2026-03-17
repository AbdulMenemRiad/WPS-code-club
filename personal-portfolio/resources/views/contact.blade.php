@extends('layouts.app')

@section('title', __('Contact Me') . ' - Abdul Meneam Riad')

@section('content')
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(9, 30, 62, .85), rgba(9, 30, 62, .85)),
         url('{{ asset('img/breadcrumb.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5 mt-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">{{ __('Contact Me') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown" class="mt-3">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">{{ __('Contact') }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-5 h-100 shadow-sm">
                        <h2 class="mb-4">{{ __('Send a Message') }}</h2>
                        <p class="mb-4 text-muted">{{ __('Whether you have a question about my Arduino builds, want to see more of my Laravel backend code, or want to reach out regarding Fall 2026 admissions, drop me a message below.') }}</p>

                        <form action="#" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" id="name" name="name" placeholder="{{ __('Your Name') }}" required>
                                        <label for="name">{{ __('Your Name') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-white border-0" id="email" name="email" placeholder="{{ __('Your Email') }}" required>
                                        <label for="email">{{ __('Your Email') }}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" id="subject" name="subject" placeholder="{{ __('Subject') }}" required>
                                        <label for="subject">{{ __('Subject') }}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-white border-0" placeholder="{{ __('Message') }}" id="message" name="message" style="height: 160px" required></textarea>
                                        <label for="message">{{ __('Message') }}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill w-100 py-3" type="submit">{{ __('Send Message') }} <i class="fas fa-paper-plane mx-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex flex-column h-100">
                        <div class="bg-light rounded p-5 mb-4 shadow-sm">
                            <div class="d-flex align-items-center mb-4">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-map-marker-alt text-white fs-4 floating-icon"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-primary mb-1">{{ __('Location') }}</h5>
                                    <p class="mb-0">{{ __('Seeb, Muscat Governorate, Oman') }}</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-envelope text-white fs-4 floating-icon"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-primary mb-1">{{ __('Email Me') }}</h5>
                                    <p class="mb-0">abdulmenemriad@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-share-alt text-white fs-4 floating-icon"></i>
                                </div>
                                <div class="ms-4 d-flex gap-2">
                                    <h5 class="text-primary mb-0 mx-2 mt-1">{{ __('Socials') }}</h5>
                                    <a class="btn btn-sm-square btn-outline-primary rounded-circle" href="#" target="_blank"><i class="fab fa-github"></i></a>
                                    <a class="btn btn-sm-square btn-outline-primary rounded-circle" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="rounded overflow-hidden shadow-sm flex-grow-1" style="min-height: 250px;">
                            <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116315.68817540798!2d58.118968987114774!3d23.64230691789729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e8e0a3cd84d1bc9%3A0xc68d447fde0fc90f!2sSeeb%2C%20Oman!5e0!3m2!1sen!2sus!4v1709400000000!5m2!1sen!2sus" style="border:0; filter: grayscale(80%) contrast(120%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
