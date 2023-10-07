@extends('layouts.app')

@section('content')
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
                    <a href="#" class="btn btn-success btn-sm">add to cart</a>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
