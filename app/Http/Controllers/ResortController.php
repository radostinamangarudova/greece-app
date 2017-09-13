<?php

namespace App\Http\Controllers;

use Image;
use Illuminate\Support\Facades\Auth;
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

        $userId = Auth::user()->id;


        $newResort = new Resort($data);

        if(Input::file())
        {
            try {

                $image = Input::file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();

                $path = public_path('img/' . $filename);

                Image::make($image->getRealPath())->save($path);
                $newResort->image = $filename;
                $newResort->author_id = $userId;

            } catch (FileNotFoundException $e) {
                return back()->withInput();
            }
        }

        $newResort->save();
        flash('Вие успешно добавихте курорт с име '.$newResort->name, 'success');

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

        if($resort->author_id == Auth::user()->id) {
            $resort->delete();

            flash('Вие успешно изтрихте курорта с име ' . $resort->name, 'success');
        }

        else{
            flash('Не може да изтрието този курорт, тъй като той е добавен от друг потребител.' , 'danger');
        }
        return redirect()->route('resorts.index');

    }

    public function edit($id)
    {
        $resort = Resort::findOrFail($id);
        return view('resorts.edit', compact('resort'));
    }

    public function update($id, array $data)
    {
        $resort = $this->find($id);
        $resort->update($data);
        $resort->facilities()->sync($data['facilities']);
        $resort->save();
    }
}
