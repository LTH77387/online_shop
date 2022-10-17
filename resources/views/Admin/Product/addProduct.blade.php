@extends('layout.bsAdmin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <a href="{{ route('productPage') }}" class="text-decoration-none text-dark">  <i class="fa fa-arrow-left fs-3  fa-lg"></i></i>Back</a>
                <div class="card">
                    <div class="card-header text-center fs-3">
                        Add Product
                    </div>
                   <form action="{{ route('productAdd') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="card-body">
                        <div class="mb-3 px-5">
                            @if (Session::has('product'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('product') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                              @endif
                          <label for="">Product Name :</label>
                          <input type="text" name="productName" id="" class="form-control">
                        </div>
                        <div class="mb-3 px-5">
                            <label for="">Product Price :</label>
                            <input type="number" name="productPrice" id="" class="form-control">
                        </div>
                        <div class="mb-3 px-5">
                            <label for="">Product Image :</label>
                            <input type="file" name="productImage" id="" class="form-control">
                        </div>
                        <div class="mb-3 px-5">
                            <select name="publishStatus" id="" class="form-control">
                                <option value="1">Publish</option>
                                <option value="0">Unpublish</option>
                            </select>
                        </div>
                        <div class="mb-3 px-5">
                            <label for="">Discount Price :</label>
                            <input type="number" name="discountPrice" id="" class="form-control">
                        </div>
                        <div class="mb-3 px-5">
                            <label for="">Brand Name :</label>
                            <select name="brandID" id="" class="form-control">
                                @foreach ($productData as $item)
                                    <option value="{{ $item->brand_id }}">{{ $item->brand_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 px-5">
                            <label for="">Category Name :</label>
                            <select name="category" id="" class="form-control">
                                @foreach ($productData as $item)
                                    <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                      <input type="submit" value="Add" class="btn bg-dark text-white float-end mb-2">
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
@endsection
