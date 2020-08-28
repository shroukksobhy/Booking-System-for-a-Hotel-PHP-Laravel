<?php $title = "Hotel Booking System"; ?>

@extends('includes/index')

@section('content')
<div class='row'>
    <div class="col-md-5">
        <div class="hotel">
            <h1>MAKE YOUR RESERVATION</h1>
            <p>StayBay Hotel</p>
            <hr>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean finibus fringilla neque nec
                volutpat.
                Etiam pretium consequat neque, vel tincidunt justo mollis at,sollicitudin malesuada mauris. Lorem
                ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
    </div>
    <div class="col-md-7 booking-form">
        <form class="form" method="POST">
        </form>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="date-picker-example">Check In</label>
                    <input type="date" name="check-in" class="form-control" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Check Out</label>
                    <input type="date" name="check-out" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <select class="form-control" required>
                        <label>Room Type </label>
                        <option value selected hidden>
                            Select Room Type
                        </option>
                        <option name="single">
                            Single
                        </option>
                        <option name="double">
                            Double
                        </option>
                        <option name="suite">
                            Suite
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <!-- <span class="form-label">Rooms</span> -->
                    <input type="number" name="name" class="form-control" placeholder="Number of rooms">
                </div>
            </div>

        </div>

        <label class="col-sm-4 col-form-label" id="displayBranch">Show selected User
            here</label>
        <div class="form-group">
            <button class="btn btn-primary">Check Availability / BOOK NOW</button>
        </div>


        </form>
    </div>
</div>

@endsection

<script type="text/javascript">
var mytextbox = document.getElementById('displayBranch');
var mydropdown = document.getElementById('selectBranch');
mydropdown.onchange = function() {
    mytextbox.value = mytextbox.value + this.value; //to appened
    mytextbox.innerHTML = this.value;
}
</script>