@extends('layouts.dashboard')
@section('content')
<div class="col-sm-12">

    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>
<h1 class="display-3">Book a Room</h1>
<table class="table table-striped">
    <div class="container">
        <form class='form' method="POST" action="{{url('api/book')}}">
            @csrf
            <div class='form-group'>
                <label>Customer: </label>
                <select class="form-control select" name="guest_id">
                    @foreach($guests as $guest)
                    <option value="{{$guest->id}}">{{ $guest->first_name }} {{$guest->last_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class='form-group'>
                <label>Room</label>
                <select class="form-control select" name="room_id">
                    @foreach($rooms as $room)
                    <option value="{{$room->id}}">{{ $room->room_number }}</option>
                    @endforeach
                </select>

                <div class='form-group'>
                    <label>Check In</label>
                    <input class=" form-control" name="check-in" type="date" value=$time_from required>
                </div>
                <div class='form-group'>
                    <label>Check Out</label>
                    <input class="form-control" name="check-out" type="date" value="time_to" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Book now" name="book">

        </form>
    </div>
</table>


@endsection