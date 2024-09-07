<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class=" col-md-4">
                    <h3>Contact US</h3>
                    <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $settings->address }}</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:{{ $settings->contact }}"> {{ $settings->contact }} </a></li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:{{ $settings->email }}"> {{ $settings->email }} </a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Menu Link</h3>
                    <ul class="link_menu">
                        {{-- <li class="active"><a href="#">Home</a></li>
                        <li><a href="about.html"> about</a></li>
                        <li><a href="room.html">Our Room</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li> --}}
                        <li class="{{ isActiveRoute('front.home') }}">
                            <a href="{{ route('front.home') }}">Home</a>
                        </li>
                        <li class="{{ isActiveRoute('front.about') }}">
                            <a href="{{ route('front.about') }}">About</a>
                        </li>
                        <li class="{{ isActiveRoute('front.room') }}">
                            <a href="{{ route('front.room') }}">Our room</a>
                        </li>
                        <li class="{{ isActiveRoute('front.gallery') }}">
                            <a href="{{ route('front.gallery') }}">Gallery</a>
                        </li>
                        {{-- <li class="{{ isActiveRoute('front.blog') }}">
                            <a href="{{ route('front.blog') }}">Blog</a>
                        </li> --}}
                        <li class="{{ isActiveRoute('front.contact') }}">
                            <a href="{{ route('front.contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    {{-- <h3>News letter</h3>
                    <form class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                    </form> --}}
                    <ul class="social_icon">
                        @if ($social->facebook_show == 1)
                            <li><a href="{{ $social->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        @endif
                        @if ($social->twitter_show == 1)
                            <li><a href="{{ $social->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        @endif
                        @if ($social->linkedin_show == 1)
                            <li><a href="{{ $social->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        @endif
                        @if ($social->youTube_show == 1)
                            <li><a href="{{ $social->youTube }}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">

                        <p>
                            &copy; {{ date('Y') }} All Rights Reserved.
                             {{-- Design by <a href="https://html.design/"> Free Html
                                Templates</a>
                            <br><br>
                            Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a> --}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
