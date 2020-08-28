<?php

namespace App\Http\Controllers;

use App\BookedRoom;
use App\Branch;
use App\Room;
use App\Guest;
use App\Booking;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function index()
    {
        $rooms = Room::all();
        $branchs = Branch::all();
        $guests = Guest::all();
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings', 'rooms', 'branches', 'guests'));
    }
    public function bookRoom(Request $request)
    {
        $roomBooking = new Booking;
        $roomBooking['check-in'] = $request['check-in'];
        $roomBooking['check-out'] = $request['check-out'];
        $roomBooking['guest_id'] = $request['guest_id'];
        $roomBooking['room_id'] = $request['room_id'];
        $roomBooking->save();
        return redirect('/api/booking');
    }
    public function deleteBookedRoom($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect('/api/booking')->with('success', 'reservation deleted!');
    }
    public function updateBookedRoom(Request $request, $id)
    {
    }
    public function check()
    {
        return view('find_room');
    }
    public function checkAvailability(Request $request)
    {
        // $rooms = Room::get()->where('status', '=', '1')->toJson(JSON_PRETTY_PRINT);
        // return response($rooms, 200);
        $time_from = $request->input('check-in');
        $time_to = $request->input('check-out');

        if ($request->isMethod('POST')) {
            $rooms = Room::with('bookings')->whereHas('bookings', function ($q) use ($time_from, $time_to) {
                $q->where(function ($q2) use ($time_from, $time_to) {
                    $q2->where('check-in', '>=', $time_to)
                        ->orWhere('check-out', '<=', $time_from);
                });
            })->orWhereDoesntHave('bookings')->get();
        } else {
            $rooms = null;
        }
        $guests = Guest::all();
        $rooms = Room::all()->where('status', '=', 'available');
        return view('bookings.booking', compact('rooms', 'time_from', 'time_to', 'guests', 'rooms'));
    }
    public function getAllBranches()
    {
        //     $branches = Branch::all();
        //     return view('welcome', compact('branches'));
    }
}