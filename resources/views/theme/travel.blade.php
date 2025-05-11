@extends('theme.master')
@section('title','Travel')
@section('category-active','active')
@section('content')

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
 
  <h1>Welcome in Travel page</h1>

      <!-- Start Blog Post Siddebar -->
      {{-- @include('theme.partial.sidebar') --}}
      <!-- End Blog Post Siddebar -->
    </div>
</section>
@endsection
