@extends('frontend.layouts.master') 
@section('title', 'Home') 
@section('nav_home', 'active') 
@section('content')
<!-- Content Start -->
<section class="page-section clearfix">
  <div class="container">
    <div class="intro">
    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset('/uploads/home/' . $home->image) }}" alt="">
      <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        {!! $home->content_1 !!}
        <div class="intro-button mx-auto">
          <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner text-center rounded">
          {!! $home->content_2 !!}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Content End -->
@endsection