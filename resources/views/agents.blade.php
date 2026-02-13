@extends('layout.app')
@section('title')
    Агенты
@endsection
@section('content')
    <section class="page-header">
        <div class="container">
            <h1>Блог RealtyPro</h1>
            <p>Полезные статьи о рынке недвижимости</p>
        </div>
    </section>

    <section class="blog">
        <div class="container grid">
            <article class="card">
                <img src="assets/images/blog1.jpg" alt="">
                <div class="info">
                    <h3>Как выбрать квартиру в новостройке</h3>
                    <p>Советы экспертов RealtyPro о покупке нового жилья и проверке застройщиков.</p>
                    <a href="#" class="btn btn-secondary">Читать далее</a>
                </div>
            </article>
            <article class="card">
                <img src="assets/images/blog2.jpg" alt="">
                <div class="info">
                    <h3>Тренды рынка в 2025 году</h3>
                    <p>Аналитика, прогнозы и рекомендации для покупателей и инвесторов.</p>
                    <a href="#" class="btn btn-secondary">Читать далее</a>
                </div>
            </article>
        </div>
    </section>
@endsection
