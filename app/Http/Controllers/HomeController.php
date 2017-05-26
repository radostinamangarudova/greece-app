<?php

namespace App\Http\Controllers;

use App\Resort;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Resort $model)
    {
        $this->model = $model;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resorts = Resort::orderBy('name')->limit(4)->get();
        return view('home', compact('resorts'));
    }
}
