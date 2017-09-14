@extends('layouts.app')

@section('content')
    <h1>{{$resort->name}}</h1>
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="text-align: center">
            <div >

                    <h3>{{$resort->name}}</h3>


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
                    <div style="padding-bottom: 100px">
                        <h4>Ревюта</h4>
                        @foreach($resort->reviews as $review)
                        <h6>{{$review->comment}}</h6>
                        
                        <div class="detailBox">
                            <div class="actionBox">
                                <ul class="commentList">
                                    <li>
                                        <div class="commentText">
                                            <p class=""></p> <span class="date sub-text">on March 5th, 2014</span>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="commenterImage">
                                          <img src="http://placekitten.com/40/40" />
                                        </div>
                                        <div class="commentText">
                                            <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                                        </div>
                                    </li>
                                </ul>
                                <form class="form-inline" role="form">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your comments" />
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-default">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endforeach
                        @if ($resort->author_id == Auth::user()->id)
                        <button class="btn btn-primary"><a href="{{ route('reviews.create', ['id' => $resort->id]) }}" >Добави Ревю</a></button>
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
