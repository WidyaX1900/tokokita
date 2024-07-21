@extends('layout.layout')
@section('content')
    <div class="container mt-5">
        @if (session('message'))
            <div class="alert alert-{{ session('message')['color'] }} alert-dismissible fade show col-8 mx-auto"
                role="alert">
                {{ session('message')['content'] }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1>My Shops</h1>
        <div class="text-end mb-3">
            <a href="/shop/create" class="btn btn-primary">
                <i class="fa-solid fa-plus me-1"></i>
                Create Shop
            </a>
        </div>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Logo</th>
                <th>Shop Name</th>
                <th>Actions</th>
            </tr>
            @foreach ($shops as $shop)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ config('app.storage_url') }}/logos/{{ $shop->photo }}" alt="" width="35px"
                            height="35px" class="rounded-circle">
                    </td>
                    <td>{{ $shop->name }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success me-2">
                            Detail
                        </a>
                        <a href="#" class="btn btn-sm btn-warning me-2">
                            Edit
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
