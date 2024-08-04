@extends('layout.layout')
@section('content')
    <div class="container mt-5">
        <a href="/shop">Back</a>
        <div class="row pt-4">
            <div class="col-5">
                <img src="{{ config('app.storage_url') }}/logos/{{ $shop->photo }}" alt="shop-logo" width="300px">
            </div>
            <div class="col-6">
                <h4>{{ $shop->name }}</h4>
                <div class="rating">
                    <i class="fa-solid fa-star text-warning"></i>
                    <span class="fw-bold">{{ $shop->rating }}</span>
                </div>
                <ul class="mt-3 px-3">
                    <li class="mb-3">
                        <strong>E-mail: </strong>
                        {{ $shop->email }}
                    </li>
                    <li>
                        <strong>Description</strong>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsum deleniti laudantium placeat laborum sed exercitationem quos voluptate adipisci repellat!</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div class="d-flex justify-content-between">
                <h4>Items</h4>
                <small class="text-secondary">Total: 99</small>
            </div>
        </div>
    </div>
@endsection