<?php

namespace App\Http\Controllers;

use Image;
use App\Resort;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Filesystem\FileNotFoundException as FileNotFoundException;

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
            try {

                $image = Input::file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();

                $path = public_path('img/' . $filename);


                Image::make($image->getRealPath())->save($path);
                $newResort->image = $filename;
            } catch (FileNotFoundException $e) {
                return back()->withInput();
            }
        }

        $newResort->save();

        return Redirect::route('resorts.index');
    }

    public function show($id)
    {
        $resort = Resort::findOrFail($id);

        return view('resorts.show', compact('resort'));
    }

    public function destroy($id)
    {
        $resort = Resort::find($id);
        $resort_name = $resort->name;
        $resort->delete();

        flash('Вие успешно изтрихте курорта с име '.$resort_name, 'success');

        return redirect()->route('resorts.index');
    }
}
