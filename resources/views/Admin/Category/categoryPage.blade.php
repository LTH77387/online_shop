@extends('layout.bsAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <a href="{{ route('adminHome') }}" class="text-decoration-none text-dark">  <i class="fa fa-arrow-left fs-3  fa-lg"></i></i>Back</a>
            <div class="card">
                <div class="card-header text-center fs-3">
                    Admin Category
                    <br>
                   <a href="{{ route('addCategory') }}"> <button class="btn btn-sm btn-outline-dark" >Add Category</button></a>
                </div>
                <div class="card-body">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->category_name }}</td>
                                    <td>{{ $item->brand_name }}</td>
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
