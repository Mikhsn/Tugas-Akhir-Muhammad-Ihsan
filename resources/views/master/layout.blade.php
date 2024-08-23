<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Conference</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/images/logo.png" type="icon">
    @include('style')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/home"> <img src="/images/logo-sotvi.png" alt="Sotvi Logo"
                    style="height: 40px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}"><a href="/home" class="nav-link">Home</a></li>
                    <li class="nav-item {{ Request::is('home/journals') ? 'active' : '' }}"><a href="/home/journals"
                            class="nav-link">Journals</a></li>
                    <li class="nav-item {{ Request::is('home/conferences') ? 'active' : '' }}"><a href="/home/conferences"
                            class="nav-link">Conferences</a></li>
                    <li class="nav-item {{ Request::is('home/news') ? 'active' : '' }}"><a href="/home/news"
                            class="nav-link">News</a></li>
                    <li class="nav-item {{ Request::is('home/ourteam') ? 'active' : '' }}"><a href="/home/ourteam"
                            class="nav-link">Ourteam</a></li>
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a href="contact.html"
                            class="nav-link">Project</a></li>

                    @if (!Request::is('home'))
                        <li class="nav-item cta mr-md-2"><a href="#" class="nav-link">Join</a></li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>
    <!-- END nav -->
    @yield('section')
    <section class="ftco-section-parallax ftco-section ftco-no-pt">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 col-lg-7 text-center heading-section ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-4 mb-4">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="/home"><img src="/images/logo.png" alt="#"
                            style="height: 30px;">Sotvi.</a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Useful Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="/home/journals" class="py-2 d-block">Journals</a></li>
                            <li><a href="/home/conferences" class="py-2 d-block">Conferences</a></li>
                            <li><a href="/home/news" class="py-2 d-block">News</a></li>
                            <li><a href="/home/ourteam" class="py-2 d-block">Ourteam</a></li>
                            <li><a href="#" class="py-2 d-block">Project</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Privacy</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Career</a></li>
                            <li><a href="#" class="py-2 d-block">About Us</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                            <li><a href="#" class="py-2 d-block">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62
                                            831 6771 4417</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Made With <i class="icon-heart color-danger"
                            aria-hidden="true"></i> by <a href="/" target="_blank">Sotvi.</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    @include('script')
</body>

</html>
