@extends('theme.master')
@section('title', 'Business')
@section('category-active', 'active')
@section('content')

    {{-- @include('theme.partial.hero',['title'=>'Category']) --}}
    <header>
  <div class="container">
    <div class="hero-banner hero-banner--sm">
      <div class="hero-banner__content">
        
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('theme.home')}}"><h1>Back Home </h1></a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
    </header>
    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin">



        <div class="container">
            <div class="owl-carousel owl-theme blog-slider">
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/business.jpg" alt="">
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">start a new business here togather</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>


                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/business2.jpg" alt="">
                    </div>


                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="#">Fashion</a>
                        <h3><a href="#">start a new business here togather </a></h3>
                        {{-- <p>2 days ago</p> --}}
                    </div>
                </div>





            </div>
            {{-- @include('theme.partial.sidebar') --}}

    </section>
@endsection
