@extends('layouts.app')

@section('content')
    <!-- banner -->
    @if (count($sliders) > 0)
        <section class="banner_main">
            <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($sliders as $key => $slider)
                        <li data-target="#myCarousel" data-slide-to="{{ $key }}"
                            class="@if ($key == 0) active @endif"></li>
                        {{-- <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li> --}}
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($sliders as $key => $slider)
                        {{-- <li data-target="#myCarousel" data-slide-to="{{ $key }}"
                            class="@if ($key == 0) active @endif">
                        </li> --}}
                        <div class="carousel-item @if ($key == 0) active @endif">
                            <img class="sliders" src="{{ public_asset($slider->image) }}" alt="First slide">
                            <div class="container">
                                {{-- {{ $slider->title }} --}}
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="carousel-item active">
                        <img class="sliders" src="public/assets/front/images/banner1.jpg" alt="First slide">
                        <div class="container">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="sliders" src="public/assets/front/images/banner2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="sliders" src="public/assets/front/images/banner3.jpg" alt="Third slide">
                    </div> --}}
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="booking_ocline">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="book_room">
                                <h1>Book a Room Online</h1>
                                <form class="book_now">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span>Arrival</span>
                                            <img class="date_cua" src="public/assets/front/images/date.png">
                                            <input class="online_book" placeholder="dd/mm/yyyy" type="date"
                                                name="dd/mm/yyyy">
                                        </div>
                                        <div class="col-md-12">
                                            <span>Departure</span>
                                            <img class="date_cua" src="public/assets/front/images/date.png">
                                            <input class="online_book" placeholder="dd/mm/yyyy" type="date"
                                                name="dd/mm/yyyy">
                                        </div>
                                        <div class="col-md-12">
                                            <button class="book_btn">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- end banner -->


    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>About Us</h2>
                        <p style="text-align: justify;">Jageshwar is a Hindu pilgrimage town near Almora in Almora district
                            of the Himalayan Indian state
                            of Uttarakhand. It is one of the Dhams (pilgrimage region) in the Shaivism tradition. The site
                            is protected under Indian laws, and managed by the Archaeological Survey of India (ASI). It
                            includes Dandeshwar Temple, Chandi-ka-Temple, Jageshwar Temple, Kuber Temple, Mritunjaya Temple,
                            Nanda Devi or Nau Durga, Nava-grah temple, a Pyramidal shrine, and Surya Temple. The site
                            celebrates the Jageshwar Monsoon Festival during the Hindu calendar month of Shravan (overlaps
                            with July–August) and the annual Maha Shivratri Mela (Shivratri festival), which takes place in
                            early spring. </p>
                        {{-- <a class="read_more" href="Javascript:void(0)"> Read More</a> --}}
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="{{ public_asset('assets/front/images/jageshwar-temple-1.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>About Us</h2>
                        <p>The passage experienced a surge in popularity during the 1960s when Letraset
                            used it on their
                            dry-transfer sheets, and again during the 90s as desktop publishers bundled
                            the text with
                            their software. Today it's seen all around the web; on templates, websites,
                            and stock
                            designs. Use our generator to get your own, or read on for the authoritative
                            history of
                            lorem ipsum. </p>
                        <a class="read_more" href="Javascript:void(0)"> Read More</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="{{ public_asset('assets/front/images/pages/about.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- our_room -->
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        {{-- <p>Lorem Ipsum available, but the majority have suffered </p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($rooms as $room)
                    <div class="col-md-6 col-sm-12">
                        <div id="serv_hover" class="room">
                            <div class="room_img">
                                <figure><img src="{{ public_asset($room->photo) }}" alt="{{ $room->name }}" /></figure>
                            </div>
                            <div class="bed_room">
                                <h3>{{ $room->name }}</h3>
                                <p class="room_price">₹{{ number_format($room->price, 2) }}</p> <!-- Display the price -->
                                <p>{{ $room->description }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <p>No rooms available at the moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- end our_room -->

    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery1.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery3.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery5.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery19.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery9.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery10.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery31.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery35.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery27.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->

    {{-- <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Blog</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="public/assets/front/images/blog1.jpg" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Bed Room</h3>
                            <span>The standard chunk </span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you
                                are </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="public/assets/front/images/blog2.jpg" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Bed Room</h3>
                            <span>The standard chunk </span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you
                                are </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="public/assets/front/images/blog3.jpg" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Bed Room</h3>
                            <span>The standard chunk </span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you
                                are </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog --> --}}

    <!--  contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form" method="POST" action="{{ route('front.save.contact') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Name" type="text" name="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email * " type="email" name="email" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="number" name="phone">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Subject" type="text" name="subject">
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message * " name="message" required></textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="600" height="480" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
@endsection
