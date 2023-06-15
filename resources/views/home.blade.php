@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center m-5">
        <a href="/create" class="btn btn-outline-dark ms-auto">Add Employ</a>
    </div>
    <table class="table">
        <thead>
              <tr>
                <th scope="col">image</th>
                <th scope="col">Full name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                <th scope="col">Modify</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>img</td>
                <td>Name</td>
                <td>age</td>
                <td>email</td>
                <td>city</td>
                <td><a href="/edit" class="btn btn-outline-warning">Modify</a></td>
                <td><button class="btn btn-outline-danger">Delete</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
