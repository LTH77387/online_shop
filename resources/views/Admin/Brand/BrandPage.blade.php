@extends('layout.bsAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <a href="{{ route('adminHome') }}" class="text-decoration-none text-dark">  <i class="fa fa-arrow-left fs-3  fa-lg"></i></i>Back</a>
            <div class="card">

                <div class="card-header text-center fs-3">
                    Admin Brand
                    <br>
                   <a href="{{ route('addBrand') }}"> <button class="btn btn-sm btn-outline-dark" >Add Brand</button></a>
                </div>
                <div class="card-body">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Brand ID</th>
                                <th>Brand Name</th>
                                <th>Brand Image</th>
                            </tr>
                        </thead>
                        <tbody>

    @foreach ($brandData as $item)
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->brand_name }}</td>
          <td>
              <img src="{{ asset('/uploads/' . $item->brand_image) }}" alt="" class="img-thumbnail" width="100px" height="100px" >
          </td>
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
