@extends('layouts.dashboard')
@section('content')


<h1 class="display-3">Rooms</h1>
<!-- <h1><a href="{{url('/api/admin/roomPDF')}}" class="btn btn-info">Report in PDF</a></h1> -->

<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Room Number</td>
            <td>Branch id</td>
            <!-- Delete branch id later -->
            <td>Status</td>
            <td>Room Type</td>
            <td colspan=2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
        <tr>
            <td>{{$room->id}}</td>
            <td>{{$room->number}}</td>
            <td>{{$room->branch_id}}</td>
            <td>{{$room->status}}</td>
            <td>{{$room->room_type}}</td>

            <td>
                <a href="" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="" method=" post">
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