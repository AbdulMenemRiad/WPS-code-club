@extends('layouts.app')

@section('title', 'Home - WPS Coding & Robotics Club')

@section('content')
    <div class="header-carousel owl-carousel">
      <div class="header-carousel-item">
        <img src="{{ asset('img/counter-bg.jpg') }}" class="img-fluid w-100" alt="Robotics Arm" />
        <div class="carousel-caption">
          <div class="carousel-caption-content p-3" style="max-width: 900px">
            <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px">
              WPS CODING & ROBOTICS CLUB
            </h4>
            <h1 class="display-1 text-capitalize text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">
              Innovate. Create. Collaborate.
            </h1>
            <p class="fs-5 wow fadeInUp" data-wow-delay="0.5s">
              Welcome to the hub of innovation at WPS, where we turn ideas into reality.
            </p>
            <div class="pt-2">
              <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="{{ url('/projects') }}">Our Projects</a>
              <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="{{ url('/blog') }}">Read Our Blog</a>
            </div>
          </div>
        </div>
      </div>
      <div class="header-carousel-item">
        <img src="{{ asset('img/t2.jpg') }}" class="img-fluid w-100" alt="Code on a screen" />
        <div class="carousel-caption">
          <div class="carousel-caption-content p-3" style="max-width: 900px">
            <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4" style="letter-spacing: 3px">
              BUILD THE FUTURE
            </h4>
            <h1 class="display-1 text-capitalize text-white mb-4">
              One Line of Code at a Time.
            </h1>
            <p class="fs-5">
              Explore the world of software development, artificial intelligence, and mechatronics with us.
            </p>
            <div class="pt-2">
              <a class="btn btn-primary rounded-pill text-white py-3 px-5 m-2" href="{{ url('/projects') }}">Our Projects</a>
              <a class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2" href="{{ url('/blog') }}">Read Our Blog</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-secondary wow zoomInDown" data-wow-delay="0.1s">
      <div class="container">
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center p-5">
          <h1 class="me-4">
            <span class="fw-normal">The first club founded in WPS</span>
          </h1>
        </div>
      </div>
    </div>
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
            <div class="border bg-secondary rounded">
              <img src="{{ asset('img/WPSM.png') }}" class="img-fluid w-100 rounded" alt="Image" />
            </div>
          </div>
          <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
            <h4 class="text-secondary sub-title fw-bold">ABOUT OUR CLUB</h4>
            <h1 class="display-3 mb-4">
              <strong class="text-primary">The First Hub for </strong>Tech Innovators
            </h1>
            <p>
              Founded in 2025, the WPS Coding and Robotics Club is a student-led initiative born from a passion for technology and a desire to create a space for hands-on learning. Our mission is to demystify complex topics in computer science and engineering, making them accessible and exciting for everyone.
            </p>
            <p class="mb-4">
              Whether you want to build your first robot, develop an app, or explore the possibilities of Artificial Intelligence, this club is for you. We provide the tools, mentorship, and collaborative environment you need to turn your ambitious ideas into real-world projects
            </p>
            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ url('/about') }}">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid counter-facts py-5 mb-5">
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
    <div class="container-fluid training py-5">
      <div class="container py-5">
        <div class="pb-5">
          <div class="row g-4 align-items-end">
            <div class="col-xl-8">
              <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Featured projects showcase</h4>
              <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Featured Projects</h1>
            </div>
            <div class="col-xl-4 text-xl-end wow fadeInUp" data-wow-delay="0.3s">
              <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ url('/projects') }}">View All Projects</a>
            </div>
          </div>
        </div>
        <div class="training-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
          <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
            <div class="training-img rounded-top">
              <img src="{{ asset('img/service-7.jpg') }}" class="img-fluid rounded-top w-100" alt="AI Gesture Controller" />
              <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0">01</h1>
            </div>
            <div class="rounded-bottom border border-top-0 p-4">
              <a href="{{ url('/projects/gesture-controller') }}" class="h4 mb-3 d-block">AI Gesture Volume Controller</a>
              <p class="mb-3">A computer vision project using Python and MediaPipe to control system audio levels through real-time hand tracking via webcam.</p>
              <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="{{ url('/projects/gesture-controller') }}">Read More</a>
            </div>
          </div>
          </div>
      </div>
    </div>
@endsection
