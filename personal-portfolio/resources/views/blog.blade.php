@extends('layouts.app')

@section('title', 'Blog - WPS Coding & Robotics Club')

@section('content')
    <div class="container-fluid bg-secondary py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Our Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid blog py-5">
      <div class="container py-5">
        <div class="text-center pb-5 wow fadeInUp" data-wow-delay="0.1s">
          <h4 class="text-secondary sub-title fw-bold">Club Updates & Articles</h4>
          <h1 class="display-2 mb-0">Latest News & Tutorials</h1>
        </div>

        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="blog-item bg-white rounded h-100 d-flex flex-column">
              <div class="blog-img rounded-top">
                <img src="{{ asset('img/class-4.jpg') }}" class="img-fluid rounded-top w-100" alt="Arduino Board" />
              </div>
              <div class="bg-light rounded-bottom p-4 flex-grow-1 d-flex flex-column">
                <div class="d-flex justify-content-between mb-4">
                  <span class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Mar 2026</span>
                  <span class="text-muted"><span class="fa fa-folder text-primary"></span> Tutorial</span>
                </div>
                <a href="#" class="h4 mb-3 d-block">Getting Started with Arduino: A Beginner's Guide</a>
                <p class="mb-3 flex-grow-1">
                  Have you ever wanted to make an LED blink or control a servo motor? In this guide, we break down the basic components of an Arduino Uno and write our very first C++ sketch.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="#">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="blog-item bg-white rounded h-100 d-flex flex-column">
              <div class="blog-img rounded-top">
                <img src="{{ asset('img/service-7.jpg') }}" class="img-fluid rounded-top w-100" alt="Python Code" />
              </div>
              <div class="bg-light rounded-bottom p-4 flex-grow-1 d-flex flex-column">
                <div class="d-flex justify-content-between mb-4">
                  <span class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 22 Feb 2026</span>
                  <span class="text-muted"><span class="fa fa-folder text-primary"></span> Software</span>
                </div>
                <a href="#" class="h4 mb-3 d-block">Python vs. C++: Which should you learn first?</a>
                <p class="mb-3 flex-grow-1">
                  It’s the age-old debate in robotics and software engineering. We take a look at the pros and cons of Python for rapid prototyping versus C++ for hardware-level performance.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="#">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="blog-item bg-white rounded h-100 d-flex flex-column">
              <div class="blog-img rounded-top">
                <img src="{{ asset('img/class-6.jpg') }}" class="img-fluid rounded-top w-100" alt="Computer Vision" />
              </div>
              <div class="bg-light rounded-bottom p-4 flex-grow-1 d-flex flex-column">
                <div class="d-flex justify-content-between mb-4">
                  <span class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 18 Feb 2026</span>
                  <span class="text-muted"><span class="fa fa-folder text-primary"></span> AI & Vision</span>
                </div>
                <a href="#" class="h4 mb-3 d-block">Understanding YOLO: How We Built Our Object Detector</a>
                <p class="mb-3 flex-grow-1">
                  A deep dive into our recent real-time object detection project. Learn how "You Only Look Once" algorithms work and how we trained our model to recognize electronic components.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="#">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="blog-item bg-white rounded h-100 d-flex flex-column">
              <div class="blog-img rounded-top">
                <img src="{{ asset('img/service-8.jpg') }}" class="img-fluid rounded-top w-100" alt="Workbench Tools" />
              </div>
              <div class="bg-light rounded-bottom p-4 flex-grow-1 d-flex flex-column">
                <div class="d-flex justify-content-between mb-4">
                  <span class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 10 Feb 2026</span>
                  <span class="text-muted"><span class="fa fa-folder text-primary"></span> Hardware</span>
                </div>
                <a href="#" class="h4 mb-3 d-block">5 Essential Tools Every Mechatronics Student Needs</a>
                <p class="mb-3 flex-grow-1">
                  Building a home lab? From decent digital multimeters and wire strippers to the perfect soldering iron, here are the top 5 tools you need to start salvaging and building.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="#">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="blog-item bg-white rounded h-100 d-flex flex-column">
              <div class="blog-img rounded-top">
                <img src="{{ asset('img/service-9.jpg') }}" class="img-fluid rounded-top w-100" alt="Club Meeting" />
              </div>
              <div class="bg-light rounded-bottom p-4 flex-grow-1 d-flex flex-column">
                <div class="d-flex justify-content-between mb-4">
                  <span class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 02 Feb 2026</span>
                  <span class="text-muted"><span class="fa fa-folder text-primary"></span> Club News</span>
                </div>
                <a href="#" class="h4 mb-3 d-block">Recap: Welcoming New Members in 2026!</a>
                <p class="mb-3 flex-grow-1">
                  Our first major club meeting of the year was a massive success! We discussed our goals for the semester, set up the workbench, and assigned teams for the upcoming robotics showcase.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="#">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="blog-item bg-white rounded h-100 d-flex flex-column">
              <div class="blog-img rounded-top">
                <img src="{{ asset('img/class-4.jpg') }}" class="img-fluid rounded-top w-100" alt="AI Concept" />
              </div>
              <div class="bg-light rounded-bottom p-4 flex-grow-1 d-flex flex-column">
                <div class="d-flex justify-content-between mb-4">
                  <span class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 15 Jan 2026</span>
                  <span class="text-muted"><span class="fa fa-folder text-primary"></span> Opinion</span>
                </div>
                <a href="#" class="h4 mb-3 d-block">The Future of AI in Education and Coding</a>
                <p class="mb-3 flex-grow-1">
                  How are Large Language Models changing the way we write code? We explore how students can use AI tools responsibly to debug errors and accelerate their learning curve.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
