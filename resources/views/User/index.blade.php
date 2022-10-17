@extends('layout.bsUser')
@section('content')
{{-- @if (Route::has('login')) --}}
{{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
    @endauth
</div>
@endif --}}
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <nav class="header__menu mobile-menu">

                <ul>
                    <li class="active"><a href="./index.html" class="text-decoration-none">Home</a></li>
                    <li><a href="{{ route('shopPage') }}" class="text-decoration-none">Shop</a></li>
                    <li><a href="#" class="text-decoration-none">Pages</a>
                        <ul class="dropdown">
                            <li><a href="./about.html" class="text-decoration-none">About Us</a></li>
                            <li><a href="./shop-details.html" class="text-decoration-none">Shop Details</a></li>
                            <li><a href="./shopping-cart.html" class="text-decoration-none">Shopping Cart</a></li>
                            <li><a href="./checkout.html" class="text-decoration-none">Check Out</a></li>
                            <li><a href="./blog-details.html" class="text-decoration-none">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="./blog.html" class="text-decoration-none">Blog</a></li>
                    <li><a href="./contact.html" class="text-decoration-none">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
</div>
{{-- carousel --}}
<section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('pic/hero-1.jpg')}}" class="d-block w-100 " alt="..." height="auto">

            <div class="carousel-caption d-flex flex-column justify-content-center text-dark"  style="top: 0;left:-30%">
                <h4 >Summer Collection</h4>
              <p > Fall-Winter Collection</p>

              </div>



        </div>

          <div class="carousel-item">
            <img src="{{ asset('pic/hero-2.jpg') }}" class="d-block w-100" alt="..." height="auto">
            <div class="carousel-caption d-flex flex-column justify-content-center text-dark"  style="top: 0;left:-30%">
                <h4 >Summer Collection</h4>
              <p > Fall-Winter Collection</p>
              </div>
        </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section><br><br>
<section>
      <!-- Banner Section Begin -->
      <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{ asset('pic/banner/banner-1.jpg') }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Clothing Collections 2030</h2>
                            <a href="{{ route('shopNow') }}" class="text-decoration-none">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{ asset('pic/banner/banner-2.jpg') }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Accessories</h2>
                            <a href="{{ route('shopNow') }}"  class="text-decoration-none">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{ asset('pic/banner/banner-3.jpg') }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Shoes Spring 2030</h2>
                            <a href="{{ route('shopNow') }}"  class="text-decoration-none">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><br>
    <!-- Banner Section End -->
</section>
{{-- product section --}}
<section>
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">

                    <li data-filter=".new-arrivals" class="active">New Arrivals</li>
                    <li data-filter=".hot-sales">Hot Sales</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
