@extends('layout.app')
@section('title')
    Главная
@endsection
@section('content')
    <section class="hero">
        <div class="hero-content">
            <h1>Найдите дом своей мечты</h1>
            <p>Покупайте и арендуйте недвижимость с RealtyPro — просто, быстро и надёжно</p>
            <a href="properties.html" class="btn btn-primary">Посмотреть объекты</a>
        </div>
    </section>


    <section class="properties">
        <div class="container">
            <h2>Популярные предложения</h2>
            <div class="grid">
                <div class="card">
                    <img src="assets/images/property1.jpg" alt="">
                    <div class="info">
                        <h3>Квартира в центре Москвы</h3>
                        <p>Москва, Арбат</p>
                        <p class="price">15 000 000 ₽</p>
                        <a href="{{route('property-details')}}" class="btn btn-secondary">Подробнее</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/property2.jpg" alt="">
                    <div class="info">
                        <h3>Дом у моря</h3>
                        <p>Сочи</p>
                        <p class="price">32 000 000 ₽</p>
                        <a href="{{route('property-details')}}" class="btn btn-secondary">Подробнее</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/property3.jpg" alt="">
                    <div class="info">
                        <h3>Офис на Невском</h3>
                        <p>Санкт-Петербург</p>
                        <p class="price">45 000 000 ₽</p>
                        <a href="{{route('property-details')}}" class="btn btn-secondary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
