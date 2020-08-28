@extends('layouts.dashboard')
@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

<h1 class="display-3">Customers</h1>

<h1><a href="{{url('/api/guests/create')}}" class="btn btn-primary">Add Customer</a></h1>

<br>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Member Since</td>
            <td colspan=2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($guests as $guest)
        <tr>
            <td>{{$guest->id}}</td>
            <td>{{$guest->first_name}} {{$guest->last_name}}</td>
            <td>{{$guest->member_since}}</td>
            <td>
                <a href="{{url('api/guests/$guest->id')}}" class=" btn btn-info">Edit</a>
            </td>
            <td>
                <form action="{{route('guests.destroy',$guest->id)}}" method="post">
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