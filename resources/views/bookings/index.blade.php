@extends('layouts.dashboard')
@section('content')

<h1 class="display-3">Hotel's Bookings</h1>

<h1><a href="{{url('/api/check')}}" class="btn btn-primary">New Booking</a></h1>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Room Number (its Id for now)</td>
            <td>Customer Name</td>
            <td>Check In</td>
            <td>Check Out</td>
            <td>Created at</td>

            <td colspan=2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $onebooking)
        <tr>
            <td>{{$onebooking->id}}</td>
            <td>{{$onebooking->room_id}}</td>
            <td>{{$onebooking->guest_id}}</td>
            <td>{{$onebooking['check-in'] }}</td>
            <td>{{$onebooking['check-out']}}</td>
            <td>{{$onebooking['created-at']}}</td>
            <td>
                <a href="#" class=" btn btn-info">Edit</a>
            </td>
            <td>
                <form action="#" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection