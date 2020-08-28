@extends('layouts.dashboard')
@section('content')
<div class="container">
    <form class='form' method="POST" action="{{url('/api/check-availability')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class='form-group'>
                    <label>Check In</label>
                    <input class="form-control" name="check-in" type="date" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class='form-group'>
                    <label>Check Out</label>
                    <input class="form-control" name="check-out" type="date" required>
                </div>
            </div>
        </div>
        <div class='form-group'>
            <label>Room Type: </label>
            <select class="form-control select" name="room_type">
                <option name='single'>Single</option>
                <option name='double'>Double</option>
                <option name='suite'>Suite</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Book" name="check-booking">
    </form>
</div>
@endsection