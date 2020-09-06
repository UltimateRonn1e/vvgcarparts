@if(!Request::is('part'))
@include('inc.secondheader')
@endif
<div class="callback">
    <div class="callphones">
        <p>Контактные телефоны:</p>
        <div class="phonetocall">
            <p>+375 (29) 197-25-97</p>
            <img src="/vvg/public/images/mts.jpg" alt="">
        </div>
        <div class="phonetocall">
            <p>+375 (29) 611-21-76</p>
            <img src="/vvg/public/images/a1.jpg" alt="">
        </div>
        <div class="phonetocall">
            <img src="/vvg/public/images/placemark.png" alt="">
            <p>Минск</p>
        </div>
    </div>
</div>
<header>
    <nav class="container">
        <a class="logo" href="{{ route('homepage') }}">
            <span></span>
        </a>
        <br><br>
        <div class="litlle-nav">
            <div class="navigation-toggle">
                <span>
                    <img src="/vvg/public/images/icon-list.png" alt="">
                </span>
            </div>
            <form action="{{route('parts')}}" method="get" id="searchform">
                <input type="text" class="searchable" id="searchable" name="search" placeholder="Марка, запчасть, маркировка">
                <button type="submit"><img src="/vvg/public/images/icon-search.png" alt=""><i class="fa-search"></i></button>
            </form>
        </div>
        <ul class="navigation">
            <div id="btn_home" class="nav_blocks">
                <li><a href="{{ route('homepage') }}">Главная</a></li>
                <div class="homepage_nav">
                    <a href="{{ route('homepage',['#yourcar']) }}">Выберите свой автомобиль</a>
                    <a href="{{ route('homepage',['#advantages']) }}">Наши преимущества</a>
                </div>
            </div>
            <div id="btn_parts" class="nav_blocks">
                <li><a href="{{ route('parts',['all']) }}">Запчасти</a></li>
                <div class="parts_nav">
                    <a href="{{ route('parts') }}/?category_name=Кузов">Кузов</a>
                    <a href="{{ route('parts') }}/?category_name=Рулевое управление">Рулевое управление</a>
                    <a href="{{ route('parts') }}/?category_name=Оптика">Оптика</a>
                    <a href="{{ route('parts') }}/?category_name=Двигатель">Двигатель</a>
                    <a href="{{ route('parts') }}/?category_name=Трансмиссия">Трансмиссия</a>
                    <a href="{{ route('parts') }}/?category_name=Электрика">Электрика</a>
                    <a href="{{ route('parts') }}/?category_name=Салон">Салон</a>
                    <a href="{{ route('parts') }}/?category_name=Система охлаждения">Система охлаждения</a>
                    <a href="{{ route('parts') }}/?category_name=Топливная система">Топливная система</a>
                    <a href="{{ route('parts') }}/?category_name=Выхлопная система">Выхлопная система</a>
                    <a href="{{ route('parts') }}/?category_name=Подвеска">Подвеска</a>
                </div>
            </div>
            <div id="btn_about" class="nav_blocks">
                <li><a href="{{ route('about') }}">О Нас</a></li>
                <div class="about_nav">
                    <a href="{{ route('about') }}">Контакты</a>
                    <a href="{{ route('about',['#feedback']) }}">Обратная связь</a>
                    <a href="{{ route('about',['#mapblock']) }}">Наше местоположение</a>
                </div>
            </div>
            <div id="btn_review" class="nav_blocks">
                <li><a href="{{ route('review') }}">Отзывы</a></li>
                <div class="review_nav">
                    <a href="{{ route('review',['#review_blocks']) }}">Отзывы покупателей</a>
                    <a href="{{ route('review',['#review_form']) }}">Оставить ваш отзыв</a>
                </div>
            </div>
        </ul>
    </nav>
</header>