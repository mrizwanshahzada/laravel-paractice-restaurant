@extends('layouts.app')

@section('title', 'Edit')

@section('content')
<div>
    <h1>Edit Restaurant</h1>
    <div class="col-sm-6">
        <form action="/edit" method="POST">
            @csrf
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $restaurant->id }}">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $restaurant->name }}" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="text" name="email" class="form-control" value="{{ $restaurant->email }}" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="{{ $restaurant->Address }}" placeholder="Enter Address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection
