<div class="slider">
    <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/slide1.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2><span>Добре дошли!</span></h2>
                            <h3 class="desc">Тук можете да разгледате най-красивите и популярни гръцки острови, както и да дадете своите рейтинг и мнения за тях.</h3>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            <form class="form-inline">
                                <div class="form-group">
                                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">
                                        <a href="{{ route('resorts.index') }}">Вижте ги тук</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="img/slide2.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2>Информация</h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                                <p>Любопитни факти за южната ни съседка</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                            <form class="form-inline">
                                <div class="form-group">
                                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">
                                        <a href="{{route('info')}}">ТУК</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="img/slide3.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption">
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2>Включи се и ти</h2>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                <p>Помогни да разширим съдържанието на сайта</p>
                            </div>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            <form class="form-inline">
                                <div class="form-group">
                                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">
                                        <a href="{{ route('resorts.create') }}">Добави от тук</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>

            <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div> <!--/#carousel-slider-->
    </div><!--/#about-slider-->
</div><!--/#slider-->
