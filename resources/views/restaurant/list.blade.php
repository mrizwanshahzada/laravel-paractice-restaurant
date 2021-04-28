@extends('layouts.app')

@section('title', 'List')

@section('content')
<div>
    <h1>List of Restaurants</h1>
    @if(Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(!empty($restaurants))
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                    <tr>
                        <th scope="row">{{ $restaurant->id }}</th>
                        <td>{{ $restaurant->name }}</td>
                        <td>{{ $restaurant->email }}</td>
                        <td>{{ $restaurant->Address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
