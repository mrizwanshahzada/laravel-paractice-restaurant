@extends('layouts.app')

@section('title', 'List')

@section('content')
<div>
    <h1>List of Restaurant</h1>
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
