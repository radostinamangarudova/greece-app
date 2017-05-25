<?php

namespace App\Http\Controllers;

use Image;
use App\Resort;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ResortController extends Controller
{
    public function __construct(Resort $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $resorts = Resort::orderBy('name')->get();
        return view('resorts.index', compact('resorts'));
    }

    public function getModel()
    {
        return new $this->model();
    }

    public function create()
    {
        $resort = $this->getModel();

        return view('resorts.create', compact('resort'));
    }

    public function store()
    {
        $data = Input::all();

        $newResort = new Resort($data);

        if(Input::file())
        {

            $image = Input::file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('img/' . $filename);


            Image::make($image->getRealPath())->save($path);
            $newResort->image = $filename;
        }

        $newResort->save();

        return Redirect::route('resorts.index');
    }
}
