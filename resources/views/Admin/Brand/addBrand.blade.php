@extends('layout.bsAdmin')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6 offset-3 mt-5">
                <a href="{{ route('adminBrand') }}" class="text-decoration-none text-dark">  <i class="fa fa-arrow-left fs-3  fa-lg"></i></i>Back</a>
                <div class="card">
                    <div class="card-header text-center fs-3">
                        Add Brand
                    </div>
                    <div class="card-body">
                      <form action="{{ route('brandAdd') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 px-5">
                            @if (Session::has('addBrand'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('addBrand') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                              @endif
                            <label for="">Brand Name :</label>
                            <input type="text" name="brandName" id="" class="form-control">
                          </div>
                          <div class="mb-3 px-5">
                              <label for="">Brand Image :</label>
                              <input type="file" name="brandImage" id="" class="form-control">
                          </div>
  <input type="submit" value="Add" class="btn bg-dark text-white float-end">
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
