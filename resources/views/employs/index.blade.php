@extends('layouts.app')
@section('content')

<div class="container">
    @if (Auth::user())
    <div class="text-center m-5">
        <a href="/create" class="btn btn-outline-dark ms-auto">Add Employ</a>
    </div>
    @endif
    <table class="table">
        <thead>
              <tr>
                <th scope="col">image</th>
                <th scope="col">Full name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                @if (Auth::user())
                <th scope="col">Modify</th>
                <th scope="col">Delete</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($employs as $employ)
            <tr>
                <td><img src="{{asset('images/employs/'.$employ->image)}}" class="img-employ" alt=""></td>
                <td>{{$employ->full_name}}</td>
                <td>{{$employ->age}}</td>
                <td>{{$employ->email}}</td>
                <td>{{$employ->cities->city_name}}</td>
                @if (Auth::user())
                <td><a href="/edit" class="btn btn-outline-warning">Modify</a></td>
                <td><button class="btn btn-outline-danger">Delete</button></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
