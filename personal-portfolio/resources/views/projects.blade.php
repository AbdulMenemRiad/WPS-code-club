@extends('layouts.app')

@section('title', 'All Projects - WPS Coding & Robotics Club')

@section('content')
    <div class="container-fluid bg-secondary py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Our Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid training py-5">
      <div class="container py-5">
        <div class="text-center pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h4 class="text-secondary sub-title fw-bold">All Projects Showcase</h4>
            <h1 class="display-2 mb-0">Explore Our Work</h1>
        </div>

        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column">
              <div class="training-img rounded-top">
                <img src="{{ asset('img/service-7.jpg') }}" class="img-fluid rounded-top w-100" alt="AI Gesture Controller" />
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <a href="{{ url('/projects/gesture-controller') }}" class="h4 mb-3 d-block">AI Gesture Volume Controller</a>
                <p class="mb-3 flex-grow-1">
                  A computer vision project using Python and MediaPipe to control system audio levels through real-time hand tracking via webcam.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/projects/gesture-controller') }}">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column">
              <div class="training-img rounded-top">
                <img src="{{ asset('img/service-8.jpg') }}" class="img-fluid rounded-top w-100" alt="Pathfinding Visualizer" />
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <a href="{{ url('/projects/pathfinding-sim') }}" class="h4 mb-3 d-block">A* Pathfinding Simulator</a>
                <p class="mb-3 flex-grow-1">
                  An interactive software tool that visualizes the A* search algorithm, demonstrating how autonomous robots navigate obstacles.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/projects/pathfinding-sim') }}">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column">
              <div class="training-img rounded-top">
                <img src="{{ asset('img/service-9.jpg') }}" class="img-fluid rounded-top w-100" alt="Sorting Visualizer" />
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <a href="{{ url('/projects/sorting-algorithm') }}" class="h4 mb-3 d-block">Algorithm Visualizer</a>
                <p class="mb-3 flex-grow-1">
                  A web-based tool built with JavaScript that animates complex sorting algorithms like QuickSort and MergeSort for educational purposes.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/projects/sorting-algorithm') }}">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column">
              <div class="training-img rounded-top">
                <img src="{{ asset('img/class-4.jpg') }}" class="img-fluid rounded-top w-100" alt="Real-time Object Detector" />
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <a href="{{ url('/projects/mask-detector') }}" class="h4 mb-3 d-block">Real-time Object Detector</a>
                <p class="mb-3 flex-grow-1">
                  Implemented a YOLO-based computer vision model capable of detecting and drawing bounding boxes around basic electronics components.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/projects/mask-detector') }}">Explore Details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column">
              <div class="training-img rounded-top">
                <img src="{{ asset('img/class-6.jpg') }}" class="img-fluid rounded-top w-100" alt="Discord Bot" />
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <a href="{{ url('/projects/discord-bot') }}" class="h4 mb-3 d-block">Club Management Bot</a>
                <p class="mb-3 flex-grow-1">
                  A custom Discord bot developed in Python to automate meeting reminders, manage roles, and share code snippets for the club.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/projects/discord-bot') }}">Explore Details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column">
              <div class="training-img rounded-top">
                <img src="{{ asset('img/service-7.jpg') }}" class="img-fluid rounded-top w-100" alt="Chatbot" />
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <a href="{{ url('/projects/nlp-study-bot') }}" class="h4 mb-3 d-block">NLP Study Assistant Bot</a>
                <p class="mb-3 flex-grow-1">
                  A lightweight NLP chatbot designed to help students query their study notes and retrieve summarized answers instantly.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/projects/nlp-study-bot') }}">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column">
              <div class="training-img rounded-top">
                <img src="{{ asset('img/class-6.jpg') }}" class="img-fluid rounded-top w-100" alt="QR Tracker" />
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <a href="{{ url('/projects/attendance-tracker') }}" class="h4 mb-3 d-block">Smart Attendance Tracker</a>
                <p class="mb-3 flex-grow-1">
                  A Python application using OpenCV to scan student ID QR codes and automatically log club attendance into a structured CSV database.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/projects/attendance-tracker') }}">Explore Details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column">
              <div class="training-img rounded-top">
                <img src="{{ asset('img/service-8.jpg') }}" class="img-fluid rounded-top w-100" alt="Web Scraper" />
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <a href="{{ url('/projects/data-scraper') }}" class="h4 mb-3 d-block">Automated Data Scraper</a>
                <p class="mb-3 flex-grow-1">
                  A Python script utilizing BeautifulSoup to automatically aggregate hardware component prices from various online electronics vendors.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/projects/data-scraper') }}">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column">
              <div class="training-img rounded-top">
                <img src="{{ asset('img/class-4.jpg') }}" class="img-fluid rounded-top w-100" alt="Weather AI" />
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <a href="{{ url('/projects/weather-dashboard') }}" class="h4 mb-3 d-block">API Weather Dashboard</a>
                <p class="mb-3 flex-grow-1">
                  A frontend web project utilizing public APIs to fetch real-time weather data and display it through dynamic HTML and CSS graphics.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/projects/weather-dashboard') }}">Explore Details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="training-item bg-white rounded h-100 d-flex flex-column">
              <div class="training-img rounded-top">
                <img src="{{ asset('img/class-6.jpg') }}" class="img-fluid rounded-top w-100" alt="Game dev" />
              </div>
              <div class="rounded-bottom border border-top-0 p-4 flex-grow-1 d-flex flex-column">
                <a href="{{ url('/projects/pygame-engine') }}" class="h4 mb-3 d-block">Basic Physics Engine</a>
                <p class="mb-3 flex-grow-1">
                  A 2D simulation built using Pygame to model basic physics concepts like gravity, collision detection, and velocity mapping.
                </p>
                <a class="btn btn-primary rounded-pill text-white py-2 px-4 mt-auto align-self-start" href="{{ url('/projects/pygame-engine') }}">Explore Details</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
@endsection
