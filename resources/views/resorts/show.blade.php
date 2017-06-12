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
                    <img src="{{ asset($resort->resort_image) }}" alt="image" class="img-responsive"/>
                    <h4>Описание:</h4>
                    <p class="desc">{{$resort->desc}}</p>
                    <h4>Местоположение: </h4>
                    <div id="map-canvas" class="google-map"></div>
                    <h4>Галерия</h4>
                    @foreach($resort->images as $image)
                        <img src="{{$image->image_name}}" alt="image" class="img-responsive" data-action="zoom" style="width: 50%; height: 100%;"/>
                    @endforeach
                        <button class="btn btn-primary"><a href="{{ URL::previous() }}" >Обратно</a></button>
                        @if ($resort->author_id == Auth::user()->id)
                        {!! Form::model($resort, ['route' => ['resorts.destroy', $resort->id], 'method' => 'delete']) !!}
                        <button type="submit" class="btn delete">Изтрий</button>
                        {!! Form::close() !!}
                            @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzE4HR3HEWc-1Y_r25SOcaMgsvUQ2PPvc&callback=initMap&libraries=places">
    </script>

    <script>
        $(function initMap() {
            var longitude = '<?php echo $resort->longitude ?>';
            var latitude = '<?php echo $resort->latitude ?>';
            var map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: {
                    lat: Number(latitude),
                    lng: Number(longitude)
                },
                zoom: 10
            });

            var marker = new google.maps.Marker({
                position: {
                    lat: Number(latitude),
                    lng: Number(longitude)
                },
                map: map,
                draggable: false
            });

        })

    </script>
@endsection
