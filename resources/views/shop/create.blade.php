@extends('layout.layout')
@section('content')
    <div class="container mt-5">
        <h3>Create Store</h3>
        <form action="" method="post" class="col-6">
            @csrf
            <input type="hidden" name="user_id" id="userId" value="9879087">
            <div class="mb-3">
                <label for="name" class="form-label">Shop Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter shop name..." name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Shop Email</label>
                <input type="text" class="form-control" id="email" placeholder="Enter shop email..." name="email">
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Shop Logo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
