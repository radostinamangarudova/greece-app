<?php

namespace App\Http\Controllers;

use App\Review;

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

    public function create()
    {
        $review = $this->getModel();
        
        return view('reviews.create', compact('review'));
    }

    public function store($resortId)
    {
        $data = Input::all();dd($data);

        $userId = Auth::user()->id;
        $resortId = $data['resort_id'];
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