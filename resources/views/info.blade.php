@extends('layouts.app')

@section('content')
    <div class="container info" >
        <div class="text-center">
            <h1>ЗА ГРЪЦКИТЕ ОСТРОВИ</h1>
        </div>
        <div class="col-md-3 pull-left"><img src="{{asset('img/18753_1.jpg')}}" data-action="zoom" class="img-responsive">
            <hr>
            <img src="{{asset('img/18753_2.jpg')}}" data-action="zoom" class="img-responsive"></div>
        <div class="col-md-6">
            <p>Гръцките острови винаги са били на челно място в списъка на топ дестинациите.Със своите 227 населени острова (от общо 1400), разпръснати в тюркоазените води на три морета (Егейско, Йонийско и Средиземно),
Гърция става една от първите дестинации за масов туризъм преди няколко десетилетия. Благодарение на нестихващия интерес
на посетители от цял свят по всяко време на годината, някои от тези острови дори съумяват да преживяват успешно само
на база на приходите от туризма.</p>
            <p>И днес, въпреки катастрофалната политическа и икономическа ситуация в южната ни съседка,
интересът към гръцките острови не спира. Не, че туристическият бранш не се е повлиял от кризата – напротив.
Просто при една елементарна развносметка и взимане предвид драстичните намаления за привличане
на чуждестранни посетители, мнозина (особено българи) избират екзотиката и предимствата на гръцките острови,
отколкото родното Черноморие.</p>
            <p>И въпреки че със своето уникално излъчване и атмосфера, всеки гръцки остров
заслужава туристическо внимание, някои от тях са се наложили като най-харесвани и най-атрактивни. Предлагащи еднакво
незабравимо и вълнуващо пътешествие в зависимост от индивидуалните вкус, интереси, време и финанси, те правят избора на
        дестинация почти невъзможен.
        </p>
        </div>
        <div class="col-md-3 pull-right"><img src="{{asset('img/18753_3.jpg')}}" data-action="zoom" class="img-responsive">
        <hr>
            <img src="{{asset('img/18753_4.jpg')}}" data-action="zoom" class="img-responsive"></div>

    </div>
    @endsection

@section('scripts')

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
@endsection