@extends('theme.master')
@section('title','Contact')
@section('content')
<!--================ Hero sm banner start =================-->  
@include('theme.partial.hero',['title'=>'Contact - Us'])
<!--================ Hero sm banner end =================-->  

<!-- ================ contact section start ================= -->

<section class="section-margin--small section-margin">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="{{route('register.auth')}}" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
          @csrf
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <input class="form-control border" name="name" type="text" value="{{old('name')}}" placeholder="Enter your name">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
                  
              </div>
              <div class="form-group">
                <input class="form-control border" name="email"  type="email" value="{{old('email')}}" placeholder="Enter email address">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <input class="form-control border" name="password" type="password" placeholder="Enter your password">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
                 
              </div>
              <div class="form-group">
                <input class="form-control border" name="password_confirmation" type="password" placeholder="Enter your password confirmation">
                {{-- @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
                @enderror --}}
              </div>
            </div>
          </div>
          <div class="form-group text-center text-md-right mt-3">
            <a  class="mx-3" href="{{route('login')}}">Alrady Registered ?</a>
            <button type="submit" class="button button--active button-contactForm">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection



