  <!--================Header Menu Area =================-->
 @php
     $headerCategory = App\Models\Category::take(2)->get();
 @endphp
 
  <header class="header_area">
      <div class="main_menu">
          <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container box_1620">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <a class="navbar-brand logo_h" href="{{ route('theme.home') }}"><img
                          src="{{ asset('assets') }}/img/logo.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                      aria-label="Toggle navigation">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <!-- Collect the nav links, forms, and other content for toggling -->
          
                  <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                      <ul class="nav navbar-nav menu_nav justify-content-center">
                          <li class="nav-item @yield('home-active')"><a class="nav-link"
                                  href="{{ route('theme.home') }}">Home</a></li>
                          <li class="nav-item @yield('category-active') submenu dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                  aria-haspopup="true" aria-expanded="false">Categories</a>
                                  {{-- @if (count($headerCategory) > 0) --}}
                                  <ul class="dropdown-menu">
                                    {{-- @foreach ($headerCategory as Category ) --}}
                                        
                                    {{-- <li class="nav-item"><a class="nav-link" href="{{ route('theme.category') }}">{{$headerCategory->name}}</a> --}}
                                    {{-- </li> --}}
                                    {{-- @endforeach --}}
                                      
                                  {{-- @endif --}}
                                  <li class="nav-item"><a class="nav-link"
                                          href="{{ route('theme.business') }}">Bussiness</a></li>
                                  <li class="nav-item"><a class="nav-link"
                                          href="{{ route('theme.travel') }}">Travel</a></li>
                              </ul>
                          </li>
                          <li class="nav-item @yield('contact-active')"><a class="nav-link"
                                  href="{{ route('theme.contact') }}">Contact</a></li>
                      </ul>

                      {{-- <!-- Add new blog -->
                      <a href="#" class="btn btn-sm btn-primary mr-2">Add New</a>
                      <!-- End - Add new blog --> --}}

                      <ul class="nav navbar-nav navbar-right navbar-social">
                          @if (!Auth::check())
                              <a href="{{ route('register') }}" class="btn btn-sm btn-warning">Register / Login</a>
                          @else
                              <li class="nav-item sumenu dropdown">
                                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                      role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                                  <ul class="dropdown-menu">
                                      <li class="nav-item"><a class="nav-link" href="blog-details.html"> My Blogs</a>
                                      </li>
                                      <li class="nav-item"  > 
                                      <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <a  class="nav-link transition hover:scale-105 hover:text-red-500" href="javascript:$('form').submit();"> Logout</a>
                                      </form>
                                    </li>
                          @endif
                      </ul>

                      </li>

                      </ul>
                  </div>
              </div>
          </nav>
      </div>
  </header>
