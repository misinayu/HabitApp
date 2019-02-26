<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habit;
use DB;

class HabitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Welecom To HabitApp';
        return view('habits.index')->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required',
            'is_turned' => 'required',
        ]);

        // Create Habit
        $habit = new Habit;
        $habit->name = $request->input('name');
        $habit->body = $request->input('body');
        $habit->is_turned = $request->input('is_turned');
        $habit->user_id = auth()->user()->id;
        $habit->save();

        return redirect('/')->with('success', 'Habit Created');
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
        $habit = Habit::find($id);
        return view('habits.edit')->with('habit', $habit);
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
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required',
            'is_turned' => 'required'
        ]);

        // Create Habit
        $habit = Habit::find($id);
        $habit->name = $request->input('name');
        $habit->body = $request->input('body');
        $habit->is_turner = $request->input('is_turned');
        $habit->save();

        return redirect('/habits')->with('success', 'Habit Updated');
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
