@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row main col-md-4 add-resort" style="margin-top: 80px;">
            <h1>Edit Resort</h1>
            {{ Form::model($resort, ['route' => ['resorts.update', $resort->id], 'method' => 'put']) }}
            @include('resorts._form', ['label' => 'Update'])
            {{ Form::close() }}
        </div>
    </div>

@endsection