@extends('layout.app')
@section('title')
    Главная
@endsection
@section('content')
    <section class="page-header">
        <div class="container">
            <h1>Доступная недвижимость</h1>
            <p>Выберите идеальный вариант для себя</p>
        </div>
    </section>

    <section class="properties-list">
        <div class="container grid">
            <div class="card">
                <img src="assets/images/property1.jpg" alt="">
                <div class="info">
                    <h3>Квартира в центре Москвы</h3>
                    <p>Москва, Арбат</p>
                    <p class="price">15 000 000 ₽</p>
                    <a href="property-details.html" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>

            <div class="card">
                <img src="assets/images/property2.jpg" alt="">
                <div class="info">
                    <h3>Дом у моря</h3>
                    <p>Сочи</p>
                    <p class="price">32 000 000 ₽</p>
                    <a href="property-details.html" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>

            <div class="card">
                <img src="assets/images/property3.jpg" alt="">
                <div class="info">
                    <h3>Офис на Невском</h3>
                    <p>Санкт-Петербург</p>
                    <p class="price">45 000 000 ₽</p>
                    <a href="property-details.html" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>
        </div>
    </section>
@endsection
