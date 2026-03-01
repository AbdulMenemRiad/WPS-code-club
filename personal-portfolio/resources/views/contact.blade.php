@extends('layouts.app')

@section('title', 'Contact Us - WPS Coding & Robotics Club')

@section('content')
    <div class="container-fluid bg-secondary py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="text-secondary sub-title fw-bold">Contact Us</h4>
                <h1 class="display-2 mb-0">Get In Touch</h1>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-5 h-100 d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center mb-5">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-map-marker-alt text-white fs-4"></i>
                            </div>
                            <div class="ms-4">
                                <h5 class="text-primary mb-1">Our Location</h5>
                                <p class="mb-0 fs-5">Al Wave Private School, Muscat</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-envelope-open text-white fs-4"></i>
                            </div>
                            <div class="ms-4">
                                <h5 class="text-primary mb-1">Club Email</h5>
                                <p class="mb-0 fs-5">wpsmechatronics@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-user-tie text-white fs-4"></i>
                            </div>
                            <div class="ms-4">
                                <h5 class="text-primary mb-1">Founder's Email</h5>
                                <p class="mb-0 fs-5">abdulmenemriad@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 rounded" style="min-height: 450px;">
                        <iframe
                            class="rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.7803802495605!2d58.23829567604139!3d23.6122080940663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e8de3af8eb6fc77%3A0x843ad559a81b02ae!2zVGhlIFdhdmUgUHJpdmF0ZSBTY2hvb2wg2YXYr9ix2LPYqSDYp9mE2YXZiNisINin2YTYrtin2LXYqQ!5e0!3m2!1sen!2som!4v1772373644568!5m2!1sen!2som"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
