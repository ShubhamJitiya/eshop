@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Products Page</h4>
        <hr>
    </div>
    <div class="card-body">
     <table class="table table-bordered" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Name</th>
                <th>Selling Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->selling_price}}</td>
                <td>
                   <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="cate-image" alt="Product image">
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ url('edit-product/'.$item->id) }}">Edit</a>
                    <a class="btn btn-danger btn-sm" href="#">Delete</a>
                </td>
            </tr>

            @endforeach
        </tbody>
     </table>
        
    </div>
</div>
@endsection