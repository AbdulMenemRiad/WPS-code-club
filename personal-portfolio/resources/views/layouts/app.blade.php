<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'WPS Coding & Robotics Club')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Coding, Robotics, Programming, WPS, Al Wave Private School, STEM, Arduino, Python" name="keywords" />
    <meta
        content="The official website for the Al Wave Private School (WPS) Coding and Robotics Club. Join us to build, code, and innovate the future."
        name="description" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yantramanav:wght@400;500;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v7.0.0/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="container-fluid bg-secondary px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">

                    <a href="#" class="text-light me-0"><i
                            class="fas fa-envelope text-primary me-2"></i>abdulmenemriad@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex justify-content-end">
                    <div class="border-end py-1">
                            <!--insta here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{ url('/') }}" class="navbar-brand p-0">
                <h1 class="text-primary m-0">
                    <i class="fas fa-microchip me-2"></i>Abdul Meneam Riad
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}"
                        class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ url('/about') }}"
                        class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Experience</a>
                    <a href="{{ url('/projects') }}"
                        class="nav-item nav-link {{ request()->is('projects') ? 'active' : '' }}">Portfolio</a>
                    <a href="{{ url('/certificates') }}"
                        class="nav-item nav-link {{ request()->is('certificates') ? 'active' : '' }}">Certifications</a>
                    <a href="{{ url('/blog') }}"
                        class="nav-item nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog</a>
                    <a href="{{ url('/contact') }}"
                        class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')

    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Abdul meneam Riad</h4>
                            <p class="text-white mb-3">Software and mechatronics Portfolio</p>
                            <div class="d-flex">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Contact</h4>
                        <div class="d-flex align-items-center mb-3">

                            <div class="text-white ms-2">
                                <p class="mb-0">968+95528094</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i
                                    class="fas fa-envelope"></i></a>
                            <div class="text-white ms-2">
                                <p class="mb-0">abdulmenemriad@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="{{ url('/about') }}" class="footer-link"> About Me</a>
                        <a href="{{ url('/blog') }}" class="footer-link"> Blog</a>
                        <a href="{{ url('/contact') }}" class="footer-link"> Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Newsletter</h4>
                            <p class="text-white mb-3">Enter your email and recieve weekly updates from our blog and
                                newsletter</p>
                            <form id="newsletter-form" action="{{ url('/subscribe') }}" method="POST">
                                @csrf
                                <div class="position-relative mx-auto rounded-pill">
                                    <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="email"
                                        name="email" placeholder="Enter your email" required />
                                    <button type="submit"
                                        class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                </div>
                            </form>
                            <div id="newsletter-message" class="mt-2 text-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('newsletter-form');
            const messageDiv = document.getElementById('newsletter-message');
            const emailInput = form.querySelector('input[name="email"]');

            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const email = emailInput.value;
                const csrfToken = document.querySelector('input[name="_token"]').value;

                messageDiv.textContent = '';
                messageDiv.className = 'mt-2 text-white';

                fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            email: email
                        })
                    })
                    .then(response => {
                        const jsonData = response.json();
                        if (!response.ok) {
                            return jsonData.then(err => {
                                throw err;
                            });
                        }
                        return jsonData;
                    })
                    .then(data => {
                        messageDiv.textContent = data.message;
                        messageDiv.classList.remove('text-danger');
                        messageDiv.classList.add('text-success');
                        form.reset();
                    })
                    .catch(error => {
                        messageDiv.textContent = error.message || 'An unexpected error occurred.';
                        messageDiv.classList.remove('text-success');
                        messageDiv.classList.add('text-danger');
                    });
            });
        });
    </script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
