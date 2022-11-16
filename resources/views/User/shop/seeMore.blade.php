@extends('layout.bsUser')
@section('content')
@foreach ($data as $item)
<div class="container-fluid">
    @if (Session::has('createPizza'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('createPizza') }}
        <button type="button" class="btn-close" item-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    <div class="row mt-4">
      <div class="col-8 offset-3 mt-5">

        <div class="col-md-9">
          <a href="{{ route('shopPage') }}" class="text-decoration-none text-dark "> <i class="fa fa-arrow-left"></i>Back</a>

          <div class="card">
            <div class="card-header p-2">
              <legend class="text-center">Product Information</legend>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
               <div class="text-center">
                  <img src="{{ asset('/uploads/' . $item->product_image) }}" class="img-thumbnail" width="200px" height="100px" class="rounded-circle" style="border-radius: 30px">
              </div><br>
                  <div class="text-center">
                      <div class="">
                          <label>Product Name:</label> <label>{{ $item->product_name }}</label>
                      </div>
                      {{-- <div class="">
                          <label>Description:</label> <label>{{ $item->description }}</label>
                      </div> --}}
                      <div class="">
                          <label>Price:</label> <label>{{ $item->product_price }}</label>
                      </div>
                      {{-- <div class="">
                          <label>Publish Status:</label>
                          @if ($item->publish_status==0)
                          Unpublish
                          @else

                              Publish
                          @endif
                      </div> --}}
                      {{-- <div class="">
                          <label>Category ID:</label> <label>{{ $item->category_id }}</label>
                      </div> --}}
                      <div class="">
                          <label>Discount:</label> <label> {{ $item->discount_price }}MMK</label>
                      </div>
                      <div class="">
                        <label>Total Price :</label> <label> {{ $item->product_price - $item->discount_price }}MMK</label>
                    </div>
                    <div class="">
                        <label for="">Count : </label>
                       <input type="number" name="count" id="" class="from-control">
                    </div>
                      {{-- <div class="">
                          <label>Buy 1 Get 1 Free:</label>
                          @if ($item->buy_one_get_one_status==1)
                             No
                          @else
                             Yes
                          @endif
                      </div> --}}
                      {{-- <div class="">
                          <label>Waiting Time:</label> <label>{{ $pizzaInfo->waiting_time }} MINS</label>
                      </div> --}}
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection
