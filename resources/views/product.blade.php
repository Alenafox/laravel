@extends('master')
@section('title', 'Товар')
@section('content')
    <div class="starter-template">
        <h1>iPhone X 64GB</h1>
        <h2>Мобильные телефоны</h2>
        <p>Цена: <b>71990 ₽</b></p>
        <h2>{{$product}}</h2>
        <img src="https://www.ttt.ua/uploads/shop/products/additional/b2bdcd5bc0704a3fa95174395a13c27e.png">
        <p>Отличный продвинутый телефон с памятью на 64 gb</p>
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
        <input type="hidden" name="_token">        
    </div>
@endsection