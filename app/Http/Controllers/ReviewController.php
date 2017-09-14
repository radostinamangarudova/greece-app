<?php

namespace App\Http\Controllers;

use App\Review;
use App\Resort;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{
    public function __construct(Review $model)
    {
        $this->model = $model;
    }
    
    public function getModel()
    {
        return new $this->model();
    }

    public function index()
    {
        
    }

    public function create($resort_id)
    {
        $review = $this->getModel();
        $resortModel = new Resort();
        $resort = $resortModel->find($resort_id);

        
        return view('reviews.create', compact('review', 'resort'));
    }

    public function store($resortId)
    {
        $data = Input::all();

        $userId = Auth::user()->id;
        $newReview = new Review($data);
        $newReview->user_id = $userId;
        $newReview->resort_id = $resortId;

        $newReview->save();
        flash('Вие успешно добавихте своето ревю. ', 'success');

        return Redirect::route('resorts.index');
    }

    public function show($id, $resort_id)
    {
        $resort = Resort::findOrFail($resort_id);

        return view('resorts.show', compact('resort'));
    }

    public function destroy($id)
    {
        

    }

    public function edit($id)
    {
        
    }

    public function update($id, array $data)
    {
        
    }
}