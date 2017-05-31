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
                        <button class="btn btn-primary"><a href="{{ URL::previous() }}" >Обратно</a></button>
                        @if ($resort->author_id == Auth::user()->id)
                        {!! Form::model($resort, ['route' => ['resorts.destroy', $resort->id], 'method' => 'delete']) !!}
                        <button type="submit" class="btn delete">Изтрий</button>
                        {!! Form::close() !!}
                            @endif

                    <a href = "{{ route('resorts.edit', ['id' => $resort->id]) }}" title="Edit">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
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
