@extends('layout.bsAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <a href="{{ route('adminHome') }}" class="text-decoration-none text-dark">  <i class="fa fa-arrow-left fs-3  fa-lg"></i></i>Back</a>
            <div class="card">
                <div class="card-header text-center fs-3">
                    Admin Product
                    <br>
                   <a href="{{ route('addProduct') }}"> <button class="btn btn-sm btn-outline-dark" >Add Product</button></a>
                </div>
                <div class="card-body">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                               <th>Product ID</th>
                               <th>Product Name</th>
                               <th>Product Price</th>
                               <th>Product Image</th>
                               <th>Publish Status</th>
                               <th>Category ID</th>
                               <th>Discount Price</th>

                            </tr>
                        </thead>
                        <tbody>
@foreach ($product as $item)
  <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->product_name }}</td>
    <td>{{ $item->product_price }}</td>
    <td>
        <img src="{{ asset('/uploads/' . $item->product_image) }}" alt="" class="img-thumbnail" width="100px" height="100px" >
    </td>
    <td>{{ $item->publish_status }}</td>
    <td>{{ $item->category_id }}</td>
    <td>{{ $item->discount_price }}</td>
  </tr>
@endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
