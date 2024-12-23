@extends('layouts.app')
@section('title', getSettings()->app_name.':: Contact Page')
@section('content')
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  contact -->
    <div class="contact">
        <div class="container">
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

            <div class="back_re mt-5">
                <div class="container text-center">
                    <h2 class="text-white">Address</h2>
                </div>
            </div>

            <div class="address my-3">
                <p class="mb-2">
                    <strong>Address : </strong> Behind aartola parking Aartola jageshwar road Aartola
                </p>
                <p class="mb-2">
                    <strong>Email : </strong> <a href="mailto:daarukavaneecoresort@gmail.com">daarukavaneecoresort@gmail.com</a>
                </p>
                <p class="mb-2">
                    <strong>Contact 1 : </strong> <a href="tel:+91 6396021235">6396021235</a>
                </p>
                <p class="mb-2">
                    <strong>Contact 2 : </strong> <a href="tel:+91 9410312602">9410312602</a>
                </p>
            </div>
        </div>
    </div>
    <!-- end contact -->
    @endsection

@push('styles')
    <style>
        .address p.mb-2 {
            font-size: 18px;
            }
    </style>
@endpush
