<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
     <!-- Css Styles -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<style>
    /* From uiverse.io */
/* button {
 align-items: center;
 background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
 border: 0;
 border-radius: 8px;
 box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
 box-sizing: border-box;
 color: #FFFFFF;
 display: flex;
 font-family: Phantomsans, sans-serif;
 font-size: 18px;
 justify-content: center;
 line-height: 1em;
 max-width: 100%;
 min-width: 140px;
 padding: 3px;
 text-decoration: none;
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
 white-space: nowrap;
 cursor: pointer;
 transition: all .3s;
}

button:active,
button:hover {
 outline: 0;
}

button span {
 background-color: rgb(5, 6, 45);
 padding: 10px 10px;
 border-radius: 6px;
 width: 100%;
 height: 100%;
 transition: 300ms;
}

button:hover span {
 background: none;
}

button:active {
 transform: scale(0.9);
} */
/* btn_1
/* From uiverse.io by @alexroumi */
#btn_1 {
 padding: 10px 10px;
 border: unset;
 border-radius: 15px;
 color: #212121;
 z-index: 1;
 background: #e8e8e8;
 position: relative;
 font-weight: 1000;
 font-size: 17px;
 -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 transition: all 250ms;
 overflow: hidden;
}

#btn_1::before {
 content: "";
 position: absolute;
 top: 0;
 left: 0;
 height: 100%;
 width: 0;
 border-radius: 15px;
 background-color: #212121;
 z-index: -1;
 -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 transition: all 250ms
}

#btn_1:hover {
 color: #e8e8e8;
}

#btn_1:hover::before {
 width: 100%;
}*/
</style>
</head>
<body>
     <!-- Shop Section Begin -->
     <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <div class="input-group input-group-sm" style="width: 200px;">
                                    <input type="text" name="table_search" class="form-control" placeholder="Search">

                                    <div class="input-group-append">
                                      <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search fa-lg"></i>
                                      </button>
                                    </div>
                                  </div>

                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                              @foreach ($data as $item)
                                              <ul>
                                                <li><a href="#">{{ $item->brand_name }}</a></li>

                                            </ul>
                                              @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                              @foreach ($data as $item)
                                              <ul>
                                                <li><a href="#">{{ $item->brand_name }}</a></li>

                                            </ul>
                                              @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

{{--
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags">
                                                <a href="#">Product</a>
                                                <a href="#">Bags</a>
                                                <a href="#">Shoes</a>
                                                <a href="#">Fashio</a>
                                                <a href="#">Clothing</a>
                                                <a href="#">Hats</a>
                                                <a href="#">Accessories</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($data as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">

                            <div class="product__item">
                                <div class="product__item__pic set-bg">
                                    <img src="{{ asset('/uploads/' . $item->product_image) }}" alt="" class="img-thumbnail product__item__pic set-bg w-100" width="100px" height="100px" >
                                    {{-- <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="" alt=""></a></li>
                                    </ul> --}}
                                </div><br>
                                <h5 class="add-cart"><b><i>{{ $item->product_name }}</i></b></h5>
                                <div class="product__item__text">

                                    {{-- <a href="#" class="add-cart">+ Add To Cart</a> --}}
                                    {{-- <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div> --}}
                                    <h5><strike>{{ $item->product_price }}</strike></h5>
                                    <h5>{{ $item->product_price - $item->discount_price }}</h5>
                                    {{-- <div class="product__color__select">
                                        <label for="pc-4">
                                            <input type="radio" id="pc-4">
                                        </label>
                                        <label class="active black" for="pc-5">
                                            <input type="radio" id="pc-5">
                                        </label>
                                        <label class="grey" for="pc-6">
                                            <input type="radio" id="pc-6">
                                        </label>
                                    </div> --}}
                                </div><br>
                               {{-- <form action="{{ route('userOrder',Auth()->user()->id) }}" method="post">
                                @csrf
                                <button type="submit">
                                    <span class="text">Order Now!</span>
                                  </button>
                               </form> --}}
<a href="{{ route('userOrderPage',$item->product_id) }}"><button id="btn_1" class="mb-2"> See More ...
</button></a>
                            </div>
                        </div>
                        @endforeach





                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
       <!-- Js Plugins -->
       <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js') }}"></script>
       <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
       <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
       <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
       <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
       <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
       <script src="{{ asset('js/mixitup.min.js') }}"></script>
       <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
       <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
