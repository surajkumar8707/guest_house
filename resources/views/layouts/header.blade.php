<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="{{ public_asset($settings->header_image) }}" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item {{ isActiveRoute('front.home') }}">
                                    <a class="nav-link" href="{{ route('front.home') }}">Home</a>
                                </li>
                                <li class="nav-item  {{ isActiveRoute('front.about') }}">
                                    <a class="nav-link" href="{{ route('front.about') }}">About</a>
                                </li>
                                <li class="nav-item  {{ isActiveRoute('front.room') }}">
                                    <a class="nav-link" href="{{ route('front.room') }}">Our room</a>
                                </li>
                                <li class="nav-item  {{ isActiveRoute('front.gallery') }}">
                                    <a class="nav-link" href="{{ route('front.gallery') }}">Gallery</a>
                                </li>
                                {{-- <li class="nav-item  {{ isActiveRoute('front.blog') }}">
                                    <a class="nav-link" href="{{ route('front.blog') }}">Blog</a>
                                </li> --}}
                                <li class="nav-item  {{ isActiveRoute('front.contact') }}">
                                    <a class="nav-link" href="{{ route('front.contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
