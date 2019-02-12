<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitController extends Controller
{
    public function index() {
        $title = 'Welecom To HabitApp';
        return view('habits.index')->with('title', $title);
    }
}
