@extends('layouts.app')
@section('content')

<div class="container">
    <form method="POST" action="">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name">Full Name</label>
          <input type="text" class="form-control" id="name" name="name">
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
            <select name="city" id="city" class="form-control">
                <option value="1">city1</option>
                <option value="2">city2</option>
                <option value="3">city3</option>
                <option value="4">city4</option>
                <option value="5">city5</option>
            </select>
        </div>
              <button type="submit" class="btn btn-outline-warning">Edit Employ</button>
      </form>
</div>
@endsection
