<!-- header inner -->
<div class="header">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="assets/logo.png" style="height: 80px!important;" alt="#" /></a>
                </div>
            </div>
            <div class="col">
                <nav class="navigation navbar navbar-expand-md navbar-dark justify-content-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/')}}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                                <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                    <li><a class="dropdown-item" href="{{ url('faq')}}">FAQ</a></li>
                                    <li><a class="dropdown-item" href="{{ url('program')}}">Program</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="roomsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our room</a>
                                <ul class="dropdown-menu" aria-labelledby="roomsDropdown">
                                    <li><a class="dropdown-item" href="{{ url('our_rooms')}}">Booking</a></li>
                                    <li><a class="dropdown-item" href="{{ url('check_ticket')}}">Check Ticket</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Gallery</a>
                                <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
                                    <li><a class="dropdown-item" href="{{ url('hotel_gallary')}}">Gallery</a></li>
                                    <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('contact_us')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-auto">
                @if (Route::has('login'))
                    @auth
                        <x-app-layout></x-app-layout>
                    @else
                        <a class="btn btn-primary" href="{{ url('login')}}">Login</a>
                        @if (Route::has('register'))
                            <a class="btn btn-success" href="{{ url('register')}}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
<script src="/js/script.js"></script>
