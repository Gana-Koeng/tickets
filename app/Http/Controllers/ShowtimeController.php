<?php

namespace App\Http\Controllers;

use App\Models\Showtime;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $showtime = Showtime::all();
        return view('frontend.showtime');  
        // , compact('showtimes')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Showtime  $showtime
     * @return \Illuminate\Http\Response
     */
    public function show(Showtime $showtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Showtime  $showtime
     * @return \Illuminate\Http\Response
     */
    public function edit(Showtime $showtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Showtime  $showtime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Showtime $showtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Showtime  $showtime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showtime $showtime)
    {
        //
    }
}
