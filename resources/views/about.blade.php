@extends('layouts.app')

@section('title-block')
О нас
@endsection

@section('content')
<div class="about_page">
    <div class="about_main">
        <div class="part_direction">
            <h1>О НАС</h1>
        </div>
        <hr class="underline">
        <div id="about" class="about">
            <h2>Контактная информация</h2>
        </div>
        <div class="about_info_blocks">
            <div class="about_info">
                <div class="about_image">
                    <img src="/vvg/public/images/map_about.png" alt="">
                    <h3>Расположение складов</h3>
                </div>
                <hr>
                <div class="about_description">
                    <p>Склад №1: ул. Строителей</p>
                    <p>Склад №2: Гаражный корпоратив "Гудок", ул. Артёма</p>
                    <p>Склад №3: Трасса М4 11 километр, гаражный корпоратив напротив заправки United Company</p>
                </div>
            </div>
            <div class="about_info">
                <div class="about_image">
                    <img src="/vvg/public/images/working_time.png" alt="">
                    <h3>Рабочее время</h3>
                </div>
                <hr>
                <div class="about_description">
                    <p>Заказы принимаются и обрабатываются на странице в Instagram <a href="https://www.instagram.com/vvgcarparts/?hl=ru" target="_blank">@vvgcarparts</a> онлайн, по электронной почте или по телефонному звонку (предпочтительно)</p>
                    <p>По будням: с 10:00 до 21:00</p>
                    <p>По выходным: с 11:00 до 19:00</p>
                </div>
            </div>
            <div class="about_info">
                <div class="about_image">
                    <img src="/vvg/public/images/email.png" alt="">
                    <h3>Телефоны и почта</h3>
                </div>
                <hr>
                <div class="about_description">
                    <p>Рабочие телефоны: +375 (29) 197-25-97 </p>
                    <p>+375 (29) 611-21-76</p>
                    <p>email: vvgcarparts@yandex.ru</p>
                </div>
            </div>
            <div class="about_info">
                <div class="about_image">
                    <img src="/vvg/public/images/social.png" alt="">
                    <h3>Сети и мессенджеры</h3>
                </div>
                <hr>
                <div id="feedback" class="about_description">
                    <p>Viber: +375 (29) 197-25-97 </p>
                    <p>Instagram: <a href="https://www.instagram.com/vvgcarparts/?hl=ru" target="_blank">@vvgcarparts</a> </p>
                    <p>VK: <a href="https://vk.com/vintik76">vintik76</a> </p>
                    <p>Facebook: <a href="https://vk.com/vintik76">vintik76</a> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="about_feedback">
        <form method="post" action="{{route('sendMail')}}#feedback" name="" id="feedbackform">
            <h2>Форма обратной связи</h2>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" name="button">x</button>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert" name="button">x</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="form-group">
                @csrf
                <input type="text" class="form-control inputtext" aria-describedby="emailHelp" name="UserName" placeholder="Ваше имя" value="{{old('UserName')}}">
                <input type="email" class="form-control inputtext" aria-describedby="emailHelp" name="UserMail" placeholder="Ваш e-mail" value="{{old('UserMail')}}">
                <input type="tel" class="form-control inputtext" aria-describedby="emailHelp" name="UserPhone" placeholder="Ваш телефон" value="{{old('UserPhone')}}">
                <input type="text" class="form-control inputtext" aria-describedby="emailHelp" name="MessageTopic" placeholder="Тема сообщения" value="{{old('MessageTopic')}}">
                <textarea class="form-control inputtext" id="exampleFormControlTextarea1" name="MessageText" placeholder="Введите сообщение здесь.." rows="3"></textarea>
            </div>
            <input type="submit" value="Отправить сообщение" id="sendfeedback" class="btn btn-primary findpart" />
        </form>
    </div>
    <div id="mapblock" class="map-block">
        <div class="map-description">
            <h3>Наше местоположение</h3>
            <p>Наши склады находятся, преимущественно в Заводском районе, станция метро Могилёвская.</p>
            <p>Количество запчастей на складе <span style="color: #3b416d; font-size: 2rem;"> - {{$partamount}}</span></p>
            <img src="/vvg/public/images/warehouse.png" alt="">
        </div>
        <div class="map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4b357cd6a2622b35ad7fa2223df33da85735f9b6c4ffb3a3349b2fe68411adfd&amp;source=constructor" frameborder="0">
            </iframe>
        </div>
    </div>
</div>
@endsection