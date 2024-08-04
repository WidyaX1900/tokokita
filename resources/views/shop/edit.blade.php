@extends('layout.layout')
@section('content')
    <div class="container mt-5">
        <a href="/shop">Back</a>
        <h3 class="mt-2">Edit Store</h3>
        <div class="row">
            <div class="col-5">
                <img src="{{ config('app.storage_url') }}/logos/{{ $shop->photo }}" alt="shop-logo" width="300px">
            </div>
            <form action="/shop/store" method="post" class="col-6" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Shop Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter shop name..." name="name"
                        value="{{ $shop->name }}">
                    @error('name')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Shop Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter shop email..." name="email"
                        value="{{ $shop->email }}">
                    @error('email')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Shop Logo</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                    @error('photo')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
