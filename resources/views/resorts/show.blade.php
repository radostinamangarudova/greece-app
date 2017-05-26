@extends('layouts.app')

@section('content')
    <h1>{{$resort->name}}</h1>
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="text-align: center">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">{{$resort->name}}</h3>
                </div>
                <div class="panel-body">
                    <img src="{{ $resort->resort_image }}" alt="image" class="img-responsive"/>
                    <h4>Описание:</h4>
                    <p>{{$resort->desc}}</p>
                    <button class="btn btn-primary"><a href="{{ URL::previous() }}" style="color: white">Обратно</a></button>
                    {!! Form::model($resort, ['route' => ['resorts.destroy', $resort->id], 'method' => 'delete']) !!}
                    <button type="submit" class="btn btn-danger">Изтрий</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

<script>

    window.initMap = function() {

        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            center: {
                lat: 27.72,
                lng: 85.36
            },
            zoom: 10
        });
    }

</script>

