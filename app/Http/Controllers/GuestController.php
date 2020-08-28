<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use App\User;

class GuestController extends Controller
{
    // public function  __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function __construct()
    // {
    //     $this->middleware('auth')->except('create')->except('index');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guests = Guest::all();
        return view('customers.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return 'HIIIII iam create';
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $guest = new Guest;
        $guest->first_name = $request->first_name;
        $guest->last_name = $request->last_name;
        $guest->member_since = $request->member_since;

        $guest->save();
        return redirect('/api/guests')->with('success', 'Customer saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $guest = Guest::find($id);
        $guest->delete();
        return redirect('/api/guests')->with('success', 'Customer deleted!');
    }
}