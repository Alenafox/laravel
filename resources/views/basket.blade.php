@extends('master')
@section('title', 'Корзина')
@section('content')
    <div class="starter-template">
        <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{route('product', [$product->category->code, $product->code])}}">
                            <img height="56px" src="https://www.ttt.ua/uploads/shop/products/additional/b2bdcd5bc0704a3fa95174395a13c27e.png">
                            {{$product->name}}
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group form-inline">
                            <form action="{{route('basket-remove, $product)}}" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token">                            
                            @csrf
                            </form>
                            <form action="{{route('basket-add, $product)}}" method="POST">
                                <button type="submit" class="btn btn-success" href="{{route('basket-add', $product)}}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token">     
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{product->price}} руб.</td>
                    <td>{{product->getPriceForCount()}} руб.</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>{{$order->getFullPrice()}}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success">Оформить заказ</a>
        </div>
    </div>
        @endforeach
    </div>
@endsection