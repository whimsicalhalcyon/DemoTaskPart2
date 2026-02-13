@extends('layout.app')
@section('title')
    Контакты
@endsection
@section('content')
    <section class="page-header">
    <div class="container">
        <h1>Связаться с нами</h1>
        <p>Мы ответим на все ваши вопросы</p>
    </div>
    </section>

    <section class="contact-form-section">
        <div class="container">
            <form class="contact-form">
                <input type="text" placeholder="Ваше имя" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Сообщение" rows="5" required></textarea>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </section>
@endsection
