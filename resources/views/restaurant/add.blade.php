@extends('layouts.app')

@section('title', 'Add')

@section('content')
<div>
    <h1>Add New Restaurant</h1>
    <div class="col-sm-6">
        <form action="add" method="POST">
            @csrf
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection
