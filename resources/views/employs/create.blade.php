@extends('layouts.app')
@section('content')

<div class="container">
    <form method="POST" action="{{route('employs.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name">Full Name</label>
          <input type="text" class="form-control" id="name" name="full_name">
        </div>
        <div class="mb-3">
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age" name="age">
          </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <select name="city_id" id="city" class="form-control">
                @foreach ($cities as $city)
                <option value={{$city->id}}>{{$city->city_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>
              <button type="submit" class="btn btn-outline-primary">Add Employ</button>
      </form>
</div>
@endsection
