<div class="form-group">
    {!! Form::label( 'name', null, ['class' => 'control-label'] ) !!}
    {!! Form::text( 'name', $resort->name, ['class' => 'form-control', 'placeholder' => 'Enter a resort name.'] ) !!}
</div>
<div class="form-group">
    {!! Form::label( 'image', null, ['class' => 'control-label'] ) !!}
    {!! Form::file( 'image') !!}
</div>

<div class="form-group">
    {!! Form::label( 'description', null, ['class' => 'control-label'] ) !!}
    {!! Form::textarea( 'desc', $resort->desc, ['class' => 'form-control', 'placeholder' => 'Enter some description.'] ) !!}
</div>

<div class="form-group">
    <label for="" class="form-headers">Map</label>
    <input type="text" id="searchmap">
    <div id="map-canvas"></div>
</div>
<div class="form-group col-md-2 pull-left latitude">
    {{ Form::label('latitude', null, ['class' => 'control-label']) }}
    {{ Form::text('latitude', $resort->lat, array_merge(['class' => 'form-control', 'id' => 'lat'])) }}
</div>
<div class="form-group col-md-2 pull-right longitude">
    {{ Form::label('longitude', null, ['class' => 'control-label']) }}
    {{ Form::text('longitude', $resort->lng, array_merge(['class' => 'form-control', 'id' => 'lng'])) }}
</div>
<div class="form-group">
    {!! Form::submit('Save',
      array('class'=>'btn btn-sm btn-default')) !!}
</div>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzE4HR3HEWc-1Y_r25SOcaMgsvUQ2PPvc&callback=initMap&libraries=places">
</script>

<script>

    window.initMap = function() {

        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            center: {
                lat: 27.72,
                lng: 85.36
            },
            zoom: 10
        });

        var marker = new google.maps.Marker({
            position: {
                lat: 27.72,
                lng: 85.36
            },
            map: map,
            draggable: true
        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

        google.maps.event.addListener(searchBox , 'places_changed' , function(){
            var places = searchBox.getPlaces();
            var bounds =  new google.maps.LatLngBounds();
            var i,place;

            for( i = 0; place = places[i]; i++)
            {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(12);
        });

        google.maps.event.addListener(marker, 'position_changed', function(){
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#lat').val(lat);
            $('#lng').val(lng);

        });
    }

</script>