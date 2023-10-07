@extends('layouts.admin')

@section('content')
    <a class="btn btn-primary" href="{{route('admin.product.create')}}" role="button">new product</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">space</th>
        <th scope="col">price</th>
        <th scope="col">actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->space}}</td>
        <td>{{$product->price}}</td>
        <td>
        <a href="{{route('admin.product.edit', [$product->id])}}" class="btn btn-success btn-sm">edit</a>
        </td>
    </tr>
    @endforeach

    </tbody>
</table>
@endsection
