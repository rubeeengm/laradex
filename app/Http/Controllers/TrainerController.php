<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use LaraDex\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        
        return view('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request -> hasFile('avatar')) {
            $file = $request -> file('avatar');
            $name = time().$file->getClientOriginalName();
            $file -> move(public_path().'/images/', $name);
        }

        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->slug = $request->input('slug');
        $trainer->avatar = $name;
        $trainer->save();

        return "Saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Trainer $trainer)
    {
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->fill($request->except('avatar'));
        
        if ($request -> hasFile('avatar')) {
            $file = $request -> file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar = $name;
            $file -> move(public_path().'/images/', $name);
        }

        $trainer->save();

        return "Updated";
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
    }
}
