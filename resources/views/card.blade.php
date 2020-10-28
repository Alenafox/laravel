 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="https://www.ttt.ua/uploads/shop/products/additional/b2bdcd5bc0704a3fa95174395a13c27e.png">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}}</p>
            <p>
                <form action="{{route('basket-add', $product)}}" method ="post">
                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                    <a href="{{route('product',[$product0>category->code, $product->code])}}" class="btn btn-default" role="button">Подробнее</a>  
                    @csrf
                </form>               
            </p>
        </div>
    </div>
</div>