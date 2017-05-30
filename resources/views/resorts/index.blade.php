@extends('layouts.app')

@section('content')
    <div class="resorts">
        <div class="container">
            @include('flash::message')
            <div class="text-center">
                <h1>КУРОРТИ</h1>
            </div>
            <hr>
            @foreach($resorts as $resort)
            <div class="col-md-3">
                <figure class="effect-marley"><a href="{{ route('resorts.show', ['id' => $resort->id]) }}">
                        <img src="{{$resort->resort_image}}" alt="image" class="img-responsive"/>
                    <figcaption>
                        <h4>{{$resort->name}}</h4>
                        <p>{{$resort->desc_cut_out}}</p>
                    </figcaption>
                    </a>
                </figure>
            </div>
            @endforeach
        </div>
    </div>
@endsection
