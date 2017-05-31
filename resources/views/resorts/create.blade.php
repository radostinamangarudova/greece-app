@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row main col-md-4 add-resort" style="margin-top: 80px;">
            <h1>Добави курорт</h1>
            {!! Form::model($resort, ['route' => 'resorts.store',  'enctype' => 'multipart/form-data']) !!}
            @include('resorts._form', ['label' => 'Save'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection
