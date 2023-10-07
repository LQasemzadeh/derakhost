@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            add product
        </div>
        <div class="card-body">

            <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name" placeholder="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">picture</label>
                    <input type="file" class="form-control" value="{{old('image')}}" id="picture" name="picture" placeholder="picture">
                    @error('picture')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="space" class="form-label">space</label>
                <input type="text" class="form-control" value="{{old('space')}}" id="space" name="space" placeholder="space">
                @error('space')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bandwidth" class="form-label">bandwidth</label>
                <input type="text" class="form-control" value="{{old('bandwidth')}}" id="bandwidth" name="bandwidth" placeholder="bandwidth">
                @error('bandwidth')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">duration</label>
                <input type="text" class="form-control" value="{{old('duration')}}" id="duration" name="duration" placeholder="duration">
                @error('duration')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" value="{{old('price')}}" id="price" name="price" placeholder="price">
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">add</button>
            </form>
        </div>
    </div>
@endsection
