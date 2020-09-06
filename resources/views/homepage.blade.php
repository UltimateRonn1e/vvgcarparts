@extends('layouts.app')
@section('title-block')
Главная страница
@endsection

@section('content')
<div class="after_header">
    <img src="/vvg/public/images/anim_logo.gif" usemap="#image-map">
    <map name="image-map">
        <area target="" alt="" title="Контакты" href="{{ route('about') }}" coords="778,3,1016,418,1255,0" shape="poly">
        <area target="" alt="" title="Детали кузова" href="{{route('parts')}}/?category_name=Кузов" coords="774,845,1017,429,1257,845,1247,844" shape="poly">
        <area target="" alt="" title="Детали оптики" href="{{route('parts')}}/?category_name=Оптика" coords="1022,425,1507,425,1265,845" shape="poly">
        <area target="" alt="" title="Местоположение" href="/vvg/public/about#mapblock" coords="1021,417,1505,422,1264,0,1262,8" shape="poly">
        <area target="" alt="" title="Детали трансмиссии" href="{{route('parts')}}/?category_name=Трансмиссия" coords="1274,844,1513,439,1743,839" shape="poly">
        <area target="" alt="" title="Детали двигателя" href="{{route('parts')}}/?category_name=Двигатель" coords="1281,3,1741,5,1508,424" shape="poly">
    </map>
</div>
<div id="yourcar" class="cars-mark">
    <p>Выберите свой автомобиль</p>
    <h4><a href="{{ route('parts',['all']) }}">Не нашли свою марку?</a></h4>
    <div class="cars-main">
        <a href="{{ route('parts') }}/?car_mark=Toyota">
            <img src="/vvg/public/images/cars/toyota.png" alt="">
        </a>
            <a href="{{ route('parts') }}/?car_mark=Volkswagen">
            <img src="/vvg/public/images/cars/volk.png" alt="">
        </a>
        <a href="{{ route('parts') }}/?car_mark=Skoda">
            <img src="/vvg/public/images/cars/skoda.png" alt="">
        </a>
        <a href="{{ route('parts') }}/?car_mark=Chevrolet">
            <img src="/vvg/public/images/cars/chevy.png" alt="">
        </a>
        <a href="{{ route('parts') }}/?car_mark=Peugeot">
            <img src="/vvg/public/images/cars/peugeot.png" alt="">
        </a>
        <a href="{{ route('parts') }}/?car_mark=Honda">
            <img src="/vvg/public/images/cars/honda.png" alt="">
        </a>
        <a href="{{ route('parts') }}/?car_mark=Renault">
            <img src="/vvg/public/images/cars/renault.png" alt="">
        </a>
        <a href="{{ route('parts') }}/?car_mark=Dodge">
            <img src="/vvg/public/images/cars/dodge.png" alt="">
        </a>
        <a href="{{ route('parts') }}/?car_mark=Ford">
            <img src="/vvg/public/images/cars/ford.png" alt="">
        </a>
        <a href="{{ route('parts') }}/?car_mark=Chrysler">
            <img src="/vvg/public/images/cars/chrysler.png" alt="">
        </a>
        <a href="{{ route('parts') }}/?car_mark=Daewoo">
            <img src="/vvg/public/images/cars/daewoo.png" alt="">
        </a>
        <a href="{{ route('parts') }}/?car_mark=Citroen">
            <img src="/vvg/public/images/cars/citroen.png" alt="">
        </a>
    </div>
</div>
<div id="advantages" class="center-container">
    <p>Наши преимущества</p>
    <div class="advantages">
        <div class="advantages-wrapper">
            <div class="adv-options">
                <h2>Гибкий подход к покупателям</h2>
                <img src="/vvg/public/images/individual.png" alt="">
                <p>После покупки вы уйдёте довольным. Хорошее настроение, по хорошей цене.</p>
            </div>
            <div class="adv-options">
                <h2>Работа на заказ</h2>
                <img src="/vvg/public/images/order.png" alt="">
                <p>Вы можете заказать запчасть при отсутствии её наличия и получить в кратчайшие сроки.</p>
            </div>
            <div class="adv-options">
                <h2>Широкий ассортимент деталей</h2>
                <img src="/vvg/public/images/hugeamount.png" alt="">
                <p>Каталог постоянно расширяется новыми деталями. Статус наличия на складе всегда
                    актуален.</p>
            </div>
            <div class="adv-options">
                <h2>Гарантия продавца</h2>
                <img src="/vvg/public/images/guarantee.png" alt="">
                <p>Быстрый возврат или обмен детали при несоответствии или её некорректной работе.</p>
            </div>
        </div>
    </div>
</div>
<div class="mini_parts_view">
<div class="about">
  <h2>Возможно вам будет интересно</h2>
</div>
<hr class="underline">
<div class="mini_performance">
  @foreach($miniparts as $advpart)
  @include('minipart',compact('advpart'))
  @endforeach
</div>

</div>
<div class="map-block">
    <div class="map-description">
        <h3>Наше местоположение</h3>
        <p>Наши склады находятся, преимущественно в Заводском районе, станция метро Могилёвская.</p>
        <p>Количество запчастей на складе <span style="color: #3b416d; font-size: 2rem;">- {{$partamount}}</span></p>
        <img src="/vvg/public/images/warehouse.png" alt="">
    </div>
    <div class="map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4b357cd6a2622b35ad7fa2223df33da85735f9b6c4ffb3a3349b2fe68411adfd&amp;source=constructor" frameborder="0">
        </iframe>
    </div>
</div>
@endsection
