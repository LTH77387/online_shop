@extends('layout.bsAdmin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <a href="{{ route('adminCategory') }}" class="text-decoration-none text-dark">  <i class="fa fa-arrow-left fs-3  fa-lg"></i></i>Back</a>
                <div class="card">
                    <div class="card-header text-center fs-3">
                        Add Category
                    </div>
                   <form action="{{ route('categoryAdd') }}" method="POST">
                       @csrf
                       <div class="card-body">
                        <div class="mb-3 px-5">
                            @if (Session::has('category'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('category') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                              @endif
                          <label for="">Category Name :</label>
                          <input type="text" name="categoryName" id="" class="form-control">
                        </div>
                        <div class="mb-3 px-5">
                            <select name="category" id="" class="form-control">
                                @foreach ($categoryData as $item)
                                    <option value="{{ $item->id }}">{{ $item->brand_name }}</option>
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
