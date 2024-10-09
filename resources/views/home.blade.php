@extends('layouts.app')
@section('title', getSettings()->app_name.':: Home Page')
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
                                {{-- <form class="book_now">
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
                                </form> --}}
                                <a href="{{ route('front.room.book') }}"><button class="book_btn">Book Now</button></a>
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
                        <h2>Jageshwar Temple</h2>
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
                        {{-- <a href="{{ route('front.room.detail.page', $room->id) }}"> --}}
                            <div id="serv_hover" class="room">
                                <div class="room_img">
                                    <figure><img src="{{ public_asset($room->photo) }}" alt="{{ $room->name }}" /></figure>
                                </div>
                                <div class="bed_room">
                                    <h3>{{ $room->name }}</h3>
                                    <p class="room_price">₹{{ number_format($room->price, 2) }}</p> <!-- Display the price -->
                                    <p>{{ $room->description }}</p>
                                </div>
                                <div class="row mx-2 px-2">
                                    <div class="col-6">
                                        <a class="btn btn-primary btn-block" href="{{ route('front.room.book', $room->id) }}">Book</a>
                                    </div>
                                    <div class="col-6">
                                        <a class="btn btn-primary btn-block" href="{{ route('front.room.detail.page', $room->id) }}">View</a>
                                    </div>
                                </div>
                            </div>
                        {{-- </a> --}}
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
                        <h2>Our Near By Best Destination</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>Patal Bhuvaneshwar</h2>
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/patal-bhuvneshwar.jpg') }}" alt="#" />
                        </figure>
                    </div>
                    <p>Patal Bhuvaneshwar (Hindi पाताल भुवनेश्वर) is a limestone Hindu cave temple 14 km from Gangolihat in the Pithoragarh district of Uttarakhand state in India. It is located in the village of Bhubneshwar. Legend and folklore have it that this cave enshrines Lord Shiva and thirty three koti demigods [33 Types, In hindu neumerology "Koti" means "Types"]. The cave is 160 m long and 90 feet deep from the point of entrance. Limestone rock formations have created various spectacular stalactite and stalagmite figures of various hues and forms. This cave has a narrow tunnel-like opening which leads to a number of caves.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Neem Karoli</h2>
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/neem-karoli.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                    <p>Neem Karoli Baba, also known as Neeb Karori Baba or Maharajji, was a renowned Hindu saint and mystic who lived in the 20th century. His teachings and simple way of life touched the hearts of many, including prominent individuals such as Steve Jobs and Mark Zuckerberg. Neem Karoli Baba's spiritual influence led to the establishment of numerous ashrams and temples dedicated to his teachings, with Neem Karoli Baba Kainchi Dham being one of the most prominent.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Jageshwar Temple</h2>
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/jageshwar-temple.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                    <p>Jageshwar is a Hindu pilgrimage town near Almora in Almora district of the Himalayan Indian state of Uttarakhand. It is one of the Dhams (pilgrimage region) in the Shaivism tradition. The site is protected under Indian laws, and managed by the Archaeological Survey of India (ASI). It includes Dandeshwar Temple, Chandi-ka-Temple, Jageshwar Temple, Kuber Temple, Mritunjaya Temple, Nanda Devi or Nau Durga, Nava-grah temple, a Pyramidal shrine, and Surya Temple. The site celebrates the Jageshwar Monsoon Festival during the Hindu calendar month of Shravan (overlaps with July–August) and the annual Maha Shivratri Mela (Shivratri festival), which takes place in early spring.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->

<br>
<br>
    <!-- user reviews -->
<div class="reviews mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>What Our Guests Say</h2>
                </div>
            </div>
        </div>
        <div id="reviewCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#reviewCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#reviewCarousel" data-slide-to="1"></li>
                <li data-target="#reviewCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <div class="review_text">
                                <img src="{{ public_asset('assets/front/images/avator.png') }}" alt="John Doe" class="avatar-img rounded-circle mb-3" style="width: 80px; height: 80px;">
                                <p>"Had a wonderful stay! The rooms were clean and the staff was very friendly. Will definitely come back!"</p>
                                <h5>- John Doe</h5>
                                <span>★★★★★</span> <!-- Rating out of 5 -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <div class="review_text">
                                <img src="{{ public_asset('assets/front/images/avator.png') }}" alt="Jane Smith" class="avatar-img rounded-circle mb-3" style="width: 80px; height: 80px;">
                                <p>"Amazing location and peaceful atmosphere. Perfect for a getaway."</p>
                                <h5>- Jane Smith</h5>
                                <span>★★★★☆</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <div class="review_text">
                                <img src="{{ public_asset('assets/front/images/avator.png') }}" alt="Michael Brown" class="avatar-img rounded-circle mb-3" style="width: 80px; height: 80px;">
                                <p>"Beautiful scenery, excellent service, and great food. Highly recommend!"</p>
                                <h5>- Michael Brown</h5>
                                <span>★★★★★</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#reviewCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#reviewCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- end reviews -->


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
