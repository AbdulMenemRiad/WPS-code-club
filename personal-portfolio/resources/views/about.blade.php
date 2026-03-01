@extends('layouts.app')

@section('title', 'About Us - WPS Coding & Robotics Club')

@section('content')
    <div class="container-fluid bg-secondary py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
            <div class="border bg-secondary rounded">
              <img src="{{ asset('img/WPSM.png') }}" class="img-fluid w-100 rounded" alt="WPS Mechatronics Logo" />
            </div>
          </div>
          <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
            <h4 class="text-secondary sub-title fw-bold">OUR STORY</h4>
            <h1 class="display-3 mb-4">
              <strong class="text-primary">The First Hub for </strong>Tech Innovators
            </h1>
            <p>
              Founded in 2025, the WPS Coding and Robotics Club holds the proud title of being the very first student-led club established at Al Wave Private School. Born from a deep passion for technology and a desire to create a collaborative space for hands-on learning, we set out to build a community where students could push the boundaries of what they thought possible.
            </p>
            <p class="mb-4">
              Our goal is to demystify complex topics in computer science, software engineering, and mechatronics, making them accessible and exciting for everyone. Whether you want to build your first robot, develop an AI chatbot, or explore the endless possibilities of code, this club provides the tools, mentorship, and environment you need to turn your ambitious ideas into real-world projects.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-light py-5">
      <div class="container py-5">
        <div class="row g-4">
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-white rounded p-5 h-100 text-center shadow-sm">
              <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 80px; height: 80px;">
                <i class="fa fa-bullseye text-white fs-2"></i>
              </div>
              <h3 class="mb-3">Our Mission</h3>
              <p class="mb-0">
                To equip students with practical, industry-relevant skills in programming and electronics. We aim to bridge the gap between theoretical classroom learning and real-world engineering through engaging, project-based collaboration.
              </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="bg-white rounded p-5 h-100 text-center shadow-sm">
              <div class="d-inline-flex align-items-center justify-content-center bg-secondary rounded-circle mb-4" style="width: 80px; height: 80px;">
                <i class="fa fa-lightbulb text-white fs-2"></i>
              </div>
              <h3 class="mb-3">Our Vision</h3>
              <p class="mb-0">
                To inspire the next generation of engineers, developers, and tech leaders in Oman. We envision a community where every student has the confidence to solve modern problems using technology and innovation.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid counter-facts py-5 my-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="counter">
              <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                <h3>Active members</h3>
              </div>
              <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                <span class="counter-value" data-toggle="counter-up">16</span>
                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px">+</h4>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
            <div class="counter">
              <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                <h3>Completed Projects</h3>
              </div>
              <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                <span class="counter-value" data-toggle="counter-up">37</span>
                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px">+</h4>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
            <div class="counter">
              <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                <h3>Lessons given</h3>
              </div>
              <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                <span class="counter-value" data-toggle="counter-up">4</span>
                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px">+</h4>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
            <div class="counter">
              <div class="counter-icon w-100 d-flex align-items-center justify-content-center">
                <h3>Blogs written</h3>
              </div>
              <div class="counter-content d-flex align-items-center justify-content-center mt-4">
                <span class="counter-value" data-toggle="counter-up">12</span>
                <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px">+</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
