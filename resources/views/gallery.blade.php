@extends('layouts.app')
@section('title', getSettings()->app_name.':: Gallery Page')
@section('content')
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery -->
    <div class="gallery">
        <div class="container">

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery1.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery3.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery5.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery19.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery9.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery10.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery31.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery35.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ public_asset('assets/front/images/gallery/gallery27.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->
@endsection
