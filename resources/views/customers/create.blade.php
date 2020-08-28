@extends('layouts.dashboard')
@section('content')

<div class="container">
    <form class='form' method="POST" action="{{route('guests.store')}}">
        @csrf
        <div class='form-group'>
            <label>First Name: </label>
            <input class="form-control" name="first_name" type="text" required>
        </div>
        <div class='form-group'>

            <label>Last Namel </label>
            <input class="form-control" name="last_name" type="text" required>
        </div>
        <div class='form-group'>
            <label>Member Since</label>
            <input class="form-control" name="member_since" type="date" required>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-primary" value="Add Customer" name="add">
        </div>


    </form>
</div>
@endsection