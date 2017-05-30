@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        @include('partials._login')
    @else
        @include('partials._slider')
        <div class="resorts">
            <div class="container">
                <hr>
                <div class="text-center">
                    <h1>КУРОРТИ</h1>
                </div>
                @foreach($resorts as $resort)
                    <div class="col-md-3">
                        <figure class="effect-marley"><a href="{{ route('resorts.show', ['id' => $resort->id]) }}">
                                <img src="{{$resort->resort_image}}" alt="" class="img-responsive"/>
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


<section class="action">
    <div class="container">
        <div class="left-text hidden-xs">
            <h4>ЗАЩО ГЪРЦИЯ?</h4>
            <h5 class="add-resort">Палитрата от гръцки острови в толкова голяма, че е трудно да изберете къде да прекарате почивката си.
                Независимо дали сте почитатели на спокойните плажове или пък фенове на водните спортове -
                гръцките острови няма да ви разочароват нито за миг.</h5>
            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <form class="form-inline">
                    <div class="form-group">
                        <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required"><a href="{{route('info')}}">ОЩЕ</a></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="right-image hidden-xs"></div>
    </div>
</section>

<div class="services">
    <div class="container">
        <div class="text-center">
            <h2>Не виждаш тук своето любимо място за почивка в Гърция?</h2>
            <h5 class="add-resort">С помощта на тази формичка <br>може да ни помогнеш и да добавиш място, което според теб си заслужава</h5>
            <a class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                <a href="{{route('resorts.create')}}"><img src="img/form.png" class="form-icon"><h3>Добави курорт</h3></a>
            </a>
        </div>
    </div>
</div>


@include('partials/_footer')

@endif

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script>wow = new WOW({}).init();</script>
@endsection
