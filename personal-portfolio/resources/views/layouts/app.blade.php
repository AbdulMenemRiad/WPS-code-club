<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="..." name="keywords" />
    <meta content="..." name="description" />

    <script defer src="https://analytics.abdulmenem.com/script.js" data-website-id="6899fad6-4257-4d59-9ea6-7f139310f60d">
    </script>
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

    <style>
        /* --- RICH EDITOR IMAGE RESPONSIVENESS --- */
        .post-content img,
        .project-content img {
            max-width: 100%;
            /* Stops the image from overflowing the container */
            height: auto;
            /* Maintains the exact aspect ratio so it never squishes */
            border-radius: 8px;
            /* Optional: Gives the images smooth corners to match your theme */
            margin: 1.5rem 0;
            /* Adds a nice spacing gap above and below the images */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Optional: Adds a subtle depth shadow */
        }

        /* Ambient Background Styling */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: -1;
            /* Keeps it behind all your content */
            background-color: #f8f9fa;
            /* Matches your light theme, change to a dark hex if you prefer dark mode */
        }

        /* Make sure your main content containers have a solid background so text remains readable */
        .bg-white,
        .bg-light,
        .bg-secondary {
            position: relative;
            z-index: 1;
        }
    </style>
    <style>
        /* Hero Carousel RTL Fixes */
        html[dir="rtl"] .carousel-caption {
            right: 0 !important;
            left: 0 !important;
            width: 100% !important;
        }

        html[dir="rtl"] .carousel-caption-content {
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
        }

        /* --- NAVBAR EFFECTS --- */

        /* Frosted Glass Navbar */
        .glass-nav {
            background: rgba(255, 255, 255, 0.75) !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            transition: all 0.3s ease;
        }

        /* Make it a bit more solid when scrolling so text stays readable */
        .navbar.sticky-top.glass-nav {
            background: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Hacker Text Styling */
        .hacker-text {
            font-family: 'Courier New', Courier, monospace;
            font-weight: 900;
            letter-spacing: 1px;
            transition: text-shadow 0.3s ease, color 0.3s ease;
        }

        .hacker-text:hover {
            color: #0d6efd;
            /* Bootstrap Primary Blue */
            text-shadow: 0 0 10px rgba(13, 110, 253, 0.6), 0 0 20px rgba(13, 110, 253, 0.4);
            cursor: crosshair;
        }

        /* --- MICROINTERACTIONS --- */

        /* 1. Card Lift & Image Zoom */
        .training-item,
        .blog-item,
        .card {
            transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            will-change: transform, box-shadow;
        }

        .training-item:hover,
        .blog-item:hover,
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1.5rem 3rem rgba(0, 0, 0, .15) !important;
        }

        .training-img,
        .blog-img,
        .card a {
            overflow: hidden;
            /* Keeps the zooming image contained */
        }

        .training-img img,
        .blog-img img,
        .card img {
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            will-change: transform;
        }

        .training-item:hover img,
        .blog-item:hover img,
        .card:hover img {
            transform: scale(1.08);
            /* The subtle zoom effect */
        }

        /* 2. Button Spring Effect */
        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .1);
        }

        .btn:active {
            transform: translateY(-1px);
            /* Pushes down slightly when clicked */
        }

        /* 3. Nav Underline Glide */
        .navbar-nav .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 5px;
            /* Adjust based on navbar height */
            left: 50%;
            background-color: var(--bs-primary);
            transition: width 0.3s ease, left 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 80%;
            left: 10%;
        }

        /* 4. Continuous Icon Levitation (Keyframes) */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-8px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .floating-icon {
            animation: float 4s ease-in-out infinite;
        }

        /* 5. Input Focus Glow */
        .form-control:focus {
            border-color: var(--bs-primary);
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            transform: scale(1.01);
            transition: all 0.3s ease;
        }

        /* Particles.js Background Fixes (from earlier) */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: -1;
            background-color: #f8f9fa;
        }

        .bg-white,
        .bg-light,
        .bg-secondary {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    <div id="particles-js"></div>
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
                        <a href="#" class="text-light me-0"><i
                                class="fas fa-phone text-primary me-2"></i>968+95528094</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 glass-nav">
            <a href="{{ url('/') }}" class="navbar-brand p-0">
                <h1 class="text-primary m-0 d-flex align-items-center">
                    <i class="fas fa-terminal me-2"></i>
                    <span class="hacker-text" data-value="Abdul Meneam Riad">Abdul Meneam Riad</span>
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}"
                        class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">{{ __('Home') }}</a>
                    <a href="{{ url('/about') }}"
                        class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">{{ __('Experience') }}</a>
                    <a href="{{ url('/projects') }}"
                        class="nav-item nav-link {{ request()->is('projects') ? 'active' : '' }}">{{ __('Portfolio') }}</a>
                    <a href="{{ url('/certificates') }}"
                        class="nav-item nav-link {{ request()->is('certificates') ? 'active' : '' }}">{{ __('Certifications') }}</a>
                    <a href="{{ url('/blog') }}"
                        class="nav-item nav-link {{ request()->is('blog') ? 'active' : '' }}">{{ __('Blog') }}</a>
                    <a href="{{ url('/contact') }}"
                        class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">{{ __('Contact') }}</a>
                </div>

                <div class="d-flex align-items-center ms-3">
                    @if (app()->getLocale() == 'en')
                        <a href="{{ url('lang/ar') }}"
                            class="btn btn-outline-primary rounded-pill px-3 py-1 btn-sm fw-bold"
                            style="font-family: 'Tajawal', sans-serif;">عربي <i class="fas fa-globe ms-1"></i></a>
                    @else
                        <a href="{{ url('lang/en') }}"
                            class="btn btn-outline-primary rounded-pill px-3 py-1 btn-sm fw-bold">EN <i
                                class="fas fa-globe ms-1"></i></a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
    @yield('content')

    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Abdul Meneam Riad</h4>
                    <p class="text-white-50 mb-3">
                        {{ __('Software developer and mechatronics engineer bridging the gap between logic and hardware.') }}
                    </p>

                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">{{ __('Quick Links') }}</h4>
                    <a class="btn btn-link text-white-50" href="{{ url('/about') }}">{{ __('Experience') }}</a>
                    <a class="btn btn-link text-white-50" href="{{ url('/projects') }}">{{ __('Portfolio') }}</a>
                    <a class="btn btn-link text-white-50" href="{{ url('/contact') }}">{{ __('Contact') }}</a>
                    <a class="btn btn-link text-white-50" href="{{ url('/analytics') }}"><i class="fas fa-chart-line me-2"></i>{{ __('Live Analytics') }}</a>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h4 class="text-white mb-4">{{ __('Newsletter') }}</h4>
                    <p class="text-white-50 mb-3">
                        {{ __('Get notified when I publish new tech tutorials or finish major hardware builds.') }}</p>

                    @if (session('success'))
                        <div class="alert alert-success py-2">{{ session('success') }}</div>
                    @endif

                    <form action="{{ url('/subscribe') }}" method="POST">
                        @csrf
                        <div class="position-relative w-100">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5 text-white" type="email"
                                name="email" placeholder="{{ __('Your email') }}" required>
                            <button type="submit"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">{{ __('Subscribe') }}</button>
                        </div>
                    </form>
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

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 60, // Number of dots
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#0d6efd"
                }, // Primary Bootstrap blue color
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#0d6efd", // Blue connecting lines
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2, // Slow, ambient movement
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab" // Nodes reach out to the mouse
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push" // Adds more nodes when clicked
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "push": {
                        "particles_nb": 4
                    }
                }
            },
            "retina_detect": true
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}|:<>?";
            let interval = null;
            const hackerText = document.querySelector(".hacker-text");

            if (hackerText) {
                hackerText.onmouseover = event => {
                    let iteration = 0;
                    clearInterval(interval);

                    interval = setInterval(() => {
                        event.target.innerText = event.target.innerText
                            .split("")
                            .map((letter, index) => {
                                if (index < iteration) {
                                    return event.target.dataset.value[index];
                                }
                                return letters[Math.floor(Math.random() * letters.length)];
                            })
                            .join("");

                        // Controls the speed of the decoding. Lower number = faster decoding.
                        if (iteration >= event.target.dataset.value.length) {
                            clearInterval(interval);
                        }
                        iteration += 1 / 2;
                    }, 30); // 30ms between letter swaps
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (document.getElementById('particles-js')) {
                particlesJS("particles-js", {
                    "particles": {
                        "number": {
                            "value": 60,
                            "density": {
                                "enable": true,
                                "value_area": 800
                            }
                        },
                        "color": {
                            "value": "#0d6efd"
                        },
                        "shape": {
                            "type": "circle"
                        },
                        "opacity": {
                            "value": 0.5,
                            "random": false
                        },
                        "size": {
                            "value": 3,
                            "random": true
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 150,
                            "color": "#0d6efd",
                            "opacity": 0.4,
                            "width": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 2,
                            "direction": "none",
                            "random": false,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false
                        }
                    },
                    "interactivity": {
                        "detect_on": "canvas",
                        "events": {
                            "onhover": {
                                "enable": true,
                                "mode": "grab"
                            },
                            "onclick": {
                                "enable": true,
                                "mode": "push"
                            },
                            "resize": true
                        },
                        "modes": {
                            "grab": {
                                "distance": 140,
                                "line_linked": {
                                    "opacity": 1
                                }
                            },
                            "push": {
                                "particles_nb": 4
                            }
                        }
                    },
                    "retina_detect": true
                });
            }
        });
    </script>
</body>

</html>
