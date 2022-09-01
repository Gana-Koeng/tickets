<?php

namespace App\Http\Controllers;

use App\Models\Theater;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTheaterRequest;
use App\Http\Requests\UpdateTheaterRequest;

class TheaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theaters = Theater::paginate(5);
    
        return view('theaters.index',compact('theaters'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theaters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTheaterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTheaterRequest $request)
    {
        $request->validate([
            'theater' => 'required',
            'time1' => 'required',
        ]);
  
        $input = $request->all();
        Theater::create($input);
     
        return redirect()->route('theaters.index')
                        ->with('success','Theater created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theater  $theater
     * @return \Illuminate\Http\Response
     */
    public function show(Theater $theater)
    {
        return view('theaters.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theater  $theater
     * @return \Illuminate\Http\Response
     */
    public function edit(Theater $theater)
    {
        return view('theaters.edit',compact('theater'));

    }

    public function update(Request $request, Theater $theater)
    {
        $request->validate([
            'theater' => 'required',
            'time1' => 'required',
        ]);
    
        $theater->update($request->all());
    
        return redirect()->route('theaters.index')
                        ->with('success','theater updated successfully');

    }

    public function destroy(Theater $theater)
    {
        $theater->delete();
    
        return redirect()->route('theaters.index')
                        ->with('success','theater deleted successfully');
    }
    
}
