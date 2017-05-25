<?php

namespace App\Http\Controllers;

use App\Resort;

class ResortController extends Controller
{
    public function index()
    {
        $resorts = Resort::orderBy('name')->get();
        return view('resorts.index', compact('resorts'));
    }

    public function create()
    {
        return view('resorts.create');
    }

    public function store()
    {

    }
}
