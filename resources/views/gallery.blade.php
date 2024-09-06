@extends('layouts.app')

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
 <div  class="gallery">
    <div class="container">

       <div class="row">
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ public_asset('assets/front/images/gallery1.jpg') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ public_asset('assets/front/images/gallery2.jpg') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ public_asset('assets/front/images/gallery3.jpg') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ public_asset('assets/front/images/gallery4.jpg') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ public_asset('assets/front/images/gallery5.jpg') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ public_asset('assets/front/images/gallery6.jpg') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ public_asset('assets/front/images/gallery7.jpg') }}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-3 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{ public_asset('assets/front/images/gallery8.jpg') }}" alt="#"/></figure>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end gallery -->


@endsection
