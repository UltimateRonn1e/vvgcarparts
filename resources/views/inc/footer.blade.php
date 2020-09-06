<footer>
    <div class="footer container">
        <div class="footer-col"><span>Разработано одним человеком ©2020</span></div>
        <div class="footer-col">
            <div class="social-bar-wrap">
                <a title="Facebook" href="https://www.facebook.com/vint.vg" target="_blank"> <img src="/vvg/public/images/face.png" alt=""> </a>
                <a title="Viber" href="viber://chat?number=+375291972597" target="_blank"> <img src="/vvg/public/images/vb.png" alt=""> </a>
                <a title="Instagram" href="https://www.instagram.com/vvgcarparts/?hl=ru" target="_blank"> <img src="/vvg/public/images/inst.png" alt=""> </a>
                <a title="Telegram" href="tg://resolve?domain=avmeansomething" target="_blank"> <img src="/vvg/public/images/tg.png" alt=""> </a>
                <a title="Vkontakte" href="https://vk.com/vintik76" target="_blank"> <img src="/vvg/public/images/vk.png" alt=""> </a>
            </div>
        </div>
        <div class="footer-col">
            <a href="/vvg/public/">VVGCarParts</a>
        </div>
    </div>
    <div class="footer_navigation">
        <div class="footer_first">
            <div class="nav_block">
                <h2>Заказы принимаются во время работы с 10:00 по 21:00 ежедневно.</h2>
                <h2>Склады территориально находятся ст.м Могилёвская.</h2>
                <h2>По всем вопросам о запчастях по номеру: +375 (29) 197-25-97</h2>
            </div>
        </div>
        <div class="footer_second">


            <div class="nav_block">
                <h2>Навигация</h2>
                <div class="nav_block_options">
                    <a href="{{ route('homepage') }}">Главная</a>
                    <a href="{{ route('parts',['all']) }}">Запчасти</a>
                    <a href="{{ route('about') }}">О Нас</a>
                    <a href="{{ route('review') }}">Отзывы</a>
                </div>
            </div>
            <div class="nav_block">
                <h2>Главная страница</h2>
                <div class="nav_block_options">
                    <a href="{{ route('homepage',['#yourcar']) }}">Выберите свой автомобиль</a>
                    <a href="{{ route('homepage',['#advantages']) }}">Наши преимущества</a>
                </div>
            </div>
            <div class="nav_block">
                <h2>Запчасти</h2>
                <div class="nav_block_options">
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
            <div class="nav_block">
                <h2>О нас</h2>
                <div class="nav_block_options">
                    <a href="{{ route('about') }}">Контакты</a>
                    <a href="{{ route('about',['#feedback']) }}">Обратная связь</a>
                    <a href="#">Гарантия</a>
                    <a href="#">Возврат</a>
                    <a href="#">Способы доставки</a>
                </div>
            </div>
            <div class="nav_block">
                <h2>Отзывы</h2>
                <div class="nav_block_options">
                    <a href="{{ route('review',['#review_blocks']) }}">Отзывы покупателей</a>
                    <a href="{{ route('review',['#review_form']) }}">Оставить ваш отзыв</a>
                </div>
            </div>
        </div>

    </div>
</footer>