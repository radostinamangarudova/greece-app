@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row main col-md-4 add-resort" style="margin-top: 80px;">
            <h1>Добави Ревю</h1>
            {!! Form::model($review, ['route' => 'reviews.store',  'enctype' => 'multipart/form-data']) !!}
            @include('reviews._form', ['label' => 'Save'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection
