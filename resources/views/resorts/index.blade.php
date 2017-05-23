@extends('layouts.app')

@section('content')
    <div class="resorts">
        <div class="container">
            <div class="text-center">
                <h1>КУРОРТИ</h1>
            </div>
            <hr>
            @foreach($resorts as $resort)
            <div class="col-md-3">
                <figure class="effect-marley"><a href="#">
                    <img src="{{$resort->image}}" alt="" class="img-responsive"/>
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
